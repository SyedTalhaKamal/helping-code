import React from "react";
// it is builtin in react-redux and it is used extract the state of a component from the redux store using the selector function.
import { useSelector, useDispatch } from "react-redux";
import { removeTodo } from "../slices/todoSlice"; // import function name which we craete in the slice file

function Todo() {
  const todos = useSelector(() => state.todos); // syntax for using it. Call useSelector and get the access of the states which we create in the slices
  const dispatch = useDispatch();
  return (
    <>
      <h3>Todo</h3>
      <ul>
        {todos.map((item) => (
          <li key={item.id}>
            {todos.text}
            <button onClick={() => dispatch(removeTodo(item.id))}>X</button>
          </li>
        ))}
      </ul>
    </>
  );
}

export default Todo;
