const courses = require("./routes/courses");
const express = require("express");
const app = express();

// --------------------------------- API End Points or Routes -----------------------------------------//
app.use("/api/courses", courses);
// -------------------------------- API End Points or Routes -----------------------------------------//

// -------------------------------------------- Listining On Port -----------------------------------------//
const port = process.env.PORT || 3001;
app.listen(port, () => console.log(`Listening on port ${port}`));

// -------------------------------------------- Listining On Port -----------------------------------------//
