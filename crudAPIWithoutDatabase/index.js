const Joi = require("joi"); // this is npm package used for input Validation
const express = require("express");
const app = express();
app.use(express.json());

const courses = [
  { id: 1, name: "course1" },
  { id: 2, name: "course2" },
  { id: 3, name: "course3" },
];

// -------------------------------------------- Get Request -----------------------------------------//
app.get("/", (req, res) => {
  res.send("Hello World");
});

app.get("/api/courses", (req, res) => {
  res.send(courses);
});

app.get("/api/courses/:id", (req, res) => {
  const course = courses.find((c) => c.id === parseInt(req.params.id)); // it matches the given id to the actual id like if the given id is 1 and 1 is also present in the actual list then its return that value in this case its course
  if (!course) {
    res.status(404).send("The course with the given ID was not found");
    return;
  }
  res.send(course);
});
// -------------------------------------------- Get Request -----------------------------------------//

// -------------------------------------------- Post Request -----------------------------------------//

app.post("/api/courses", (req, res) => {
  const { error } = validateCourse(req.body); // object destructuring which is equal to const result = validateCourse(req.body);and it comes from Joi which is npm package

  if (error) {
    res.status(400).send(error.details[0].message);
    return;
  }
  const course = {
    id: courses.length + 1,
    name: req.body.name,
  };
  courses.push(course);
  res.send(course);
});
// -------------------------------------------- Post Request -----------------------------------------//

// -------------------------------------------- Put Request -----------------------------------------//

app.put("/api/courses/:id", (req, res) => {
  const course = courses.find((c) => c.id === parseInt(req.params.id));
  if (!course) {
    res.status(404).send("The course with the given ID was not found");
    return;
  }

  const { error } = validateCourse(req.body); // object destructuring which is equal to const result = validateCourse(req.body);and it comes from Joi which is npm package

  if (error) {
    res.status(400).send(error.details[0].message);
    return;
  }

  course.name = req.body.name;
  res.send(course);
});
// -------------------------------------------- Put Request -----------------------------------------//

// -------------------------------------------- Delete Request -----------------------------------------//

app.delete("/api/courses/:id", (req, res) => {
  const course = courses.find((c) => c.id === parseInt(req.params.id));
  if (!course) {
    res.status(404).send("The course with the given ID was not found");
    return;
  }
  const index = courses.indexOf(course);
  courses.splice(index, 1);
  res.send(course);
});
// -------------------------------------------- Delete Request -----------------------------------------//

// -------------------------------------------- Joi Function -----------------------------------------//
// We can use it for different input validations.
// We make function for this beacuse we have same validations in put and post request and we dont want code repetation
// We can make multiple Joi Validations according to the use case

function validateCourse(course) {
  const schema = Joi.object({
    name: Joi.string().min(3).required(),
  });
  return schema.validate(course);
}

// -------------------------------------------- Joi Function -----------------------------------------//

// -------------------------------------------- Listining On Port -----------------------------------------//
const port = process.env.PORT || 3001;

app.listen(port, () => console.log(`Listening on port ${port}`));

// -------------------------------------------- Listining On Port -----------------------------------------//
