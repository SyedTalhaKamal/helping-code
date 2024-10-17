const { Course, validateCourse } = require("../models/course");
const express = require("express");
const router = express.Router();

// ----------------------- how to store data in database ----------------------//
async function createCourse() {
  const course = new Course({
    name: "React Course",
    author: "Talha",
    tags: ["react", "frontend"],
    isPublished: true,
  });
  const result = await course.save();
  console.log(result);
}
// ----------------------- how to store data in database ----------------------//

// ----------------------- how to retrive data in database ----------------------//
async function getCourses() {
  const courses = await Course.find({ author: "Talha", isPublished: true })
    .limit(10)
    .sort({ name: 1 })
    .select({ name: 1, tags: 1 });
  console.log(courses);
}
// ----------------------- how to retrive data in database ----------------------//

// ----------------------- how to update data in database with query first approach ----------------------//
async function updateCourse(id) {
  const course = await Course.findById(id);
  if (!course) return;
  course.isPublished = true;
  course.author = "Another Author";
  const result = await course.save();
  console.log(result);
}
// ----------------------- how to update data in database with query first approach ----------------------//
// ------------------ how to update data in database with update data first approach ----------------------//
async function updateCourse(id) {
  const course = await Course.findByIdAndUpdate(
    id,
    {
      $set: {
        author: "Jack",
        isPublished: false,
      },
    },
    { new: true }
  );
  console.log(result);
}
// ------------------ how to update data in database with update data first approach ----------------------//

// ------------------ how to remove data in database  ----------------------//
async function removeCourse(id) {
  const result = await Course.deleteOne({ _id: id });
  // const result = await Course.deleteMany({ isPublished: false }); this is for delete all the entries in database wich contains published value false
  console.log(result);
}
// ------------------ how to remove data in database  ----------------------//

// createCourse();
// getCourses();
// updateCourse("670f5bbbf7dba691c006f8ee");
removeCourse("670f5bbbf7dba691c006f8ee");

// -------------------------------------------- Get Request -----------------------------------------//
router.get("/", async (req, res) => {
  const courses = await Course.find().sort("name");
  res.send(courses);
});

router.get("/:id", async (req, res) => {
  const course = await Course.findById(req.params.id); // it matches the given id to the actual id like if the given id is 1 and 1 is also present in the actual list then its return that value in this case its course
  if (!course) {
    res.status(404).send("The course with the given ID was not found");
    return;
  }
  res.send(course);
});
// -------------------------------------------- Get Request -----------------------------------------//

// -------------------------------------------- Post Request -----------------------------------------//

router.post("/", async (req, res) => {
  const { error } = validateCourse(req.body); // object destructuring which is equal to const result = validateCourse(req.body);and it comes from Joi which is npm package

  if (error) {
    res.status(400).send(error.details[0].message);
    return;
  }
  let course = new Course({
    name: req.body.name,
  });
  course = await course.save();
  res.send(course);
});
// -------------------------------------------- Post Request -----------------------------------------//

// -------------------------------------------- Put Request -----------------------------------------//

router.put("/:id", async (req, res) => {
  const { error } = validateCourse(req.body); // object destructuring which is equal to const result = validateCourse(req.body);and it comes from Joi which is npm package
  if (error) {
    res.status(400).send(error.details[0].message);
    return;
  }

  const course = await Course.findByIdAndUpdate(
    req.params.id,
    { name: req.body.name },
    {
      new: true, // this is for if we want to see the updated value in the response
    }
  );
  if (!course) {
    res.status(404).send("The course with the given ID was not found");
    return;
  }
  res.send(course);
});
// -------------------------------------------- Put Request -----------------------------------------//

// -------------------------------------------- Delete Request -----------------------------------------//

router.delete("/:id", async (req, res) => {
  const course = await Course.findByIdAndDelete(req.params.id);
  if (!course) {
    res.status(404).send("The course with the given ID was not found");
    return;
  }
  res.send(course);
});
// -------------------------------------------- Delete Request -----------------------------------------//

module.exports = router;
