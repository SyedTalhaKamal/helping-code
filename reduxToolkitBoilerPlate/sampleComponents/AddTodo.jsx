import React, { useState } from "react";
// import { useDispatch } from "react-redux";
// it is builtin in react-redux and it is used for sending the data or in other words it is used to add data in the store for example add todo through form
import { useDispatch } from "react-redux";
import { addTodo } from "../slices/todoSlice"; // import function name which we craete in the slice file

function AddTodo() {
  const [input, setInput] = useState("");
    const dispatch = useDispatch(); // syntax for using it
    
  const addTodoHandler = (e) => {
    e.preventDefault();
      dispatch(addTodo(input)) // call dispatch and add function in it which we import from the slices and send an argument value which we expect in the reducers function and in ths case we send input value
      setInput('')
  };

  return (
    <>
      <form onSubmit={addTodoHandler}>
        <input
          type="text"
          value={input}
          onChange={(e) => setInput(e.target.value)}
        />
        <button>Submit</button>
      </form>
    </>
  );
}

export default AddTodo;
