//Model is equal to sql table
//Every Model Name start with capital letter and it should bhe singlular not plurlar in this case it is Course not Courses
// Create models folder and make each Model in seprate files like course.js, customer.js ans so on 

const mongoose = require("mongoose");
const Joi = require("joi");

// ----------------------- how to struture data in database ----------------------//
//These are the schema types
//String
// Number
// Date
// Buffer (this for binary)
// Boolean
// Mixed
// ObjectId (this is for unique identifier)
// Array
// Decimal128
// Map
// Schema
// UUID
// BigInt
const courseSchema = new mongoose.Schema({
  name: String,
  author: String,
  tags: [String],
  date: { type: Date, default: Date.now },
  isPublished: Boolean,
});
// ----------------------- how to struture data in database ----------------------//
// ------------------------------------- Validation Function -----------------------------------------//
// We can use it for different input validations.
// We make function for this beacuse we have same validations in put and post request and we dont want code repetation
// We can make multiple Joi Validations according to the use case

function validateCourse(course) {
  const schema = Joi.object({
    name: Joi.string().min(3).required(),
  });
  return schema.validate(course);
}

// -------------------------------------- Validation Function -----------------------------------------//
module.exports.Course = mongoose.model("Course", courseSchema);
module.exports.validateCourse = validateCourse;