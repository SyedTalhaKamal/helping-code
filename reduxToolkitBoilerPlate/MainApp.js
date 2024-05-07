import React from "react";
import { store } from "./store";
import { Provider } from "react-redux";
import AddTodo from "./sampleComponents/AddTodo";
import Todo from "./sampleComponents/Todo";

function MainApp() {
  return (
    <Provider store={store}>
      <AddTodo />
      <Todo />
    </Provider>
  );
}

export default MainApp;