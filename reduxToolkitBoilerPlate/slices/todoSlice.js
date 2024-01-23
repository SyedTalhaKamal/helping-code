// configure createSilce from reduxjs/toolkit
// configure nanoid from reduxjs/toolkit. It is used for unique ids but it is optioanl
import { createSlice, nanoid } from "@reduxjs/toolkit";

// ======================== Make initial State ==========================//
// const initialState = {};
// It may be array or objects depends on the use case
const initialState = {
  todos: [
    {
      id: 1,
      text: "Hello World",
    },
  ],
};
// ======================== Make initial State ==========================//

// ======================== Export Slice ========================//
// export const todoSlice = createSlice({})
// createSlice() always contains an object
// first property is name of the slice
// second property is initial state which we created above
// third property is reducers which is object
// reducers contains multiple or single functions
// inside the reducers objects we define our functions and the syntax is functionName: (state, action) => {}
// reducers function always contains two arguments state and action
// nanoid is a method and it is used for unique ids
// action.payload is a object and we can access different properties of it like action.payload.username, action.payload.gender, action.payload.PhoneNumber etc
// state.initialArrayName.push(newObjectName). it is used for update the state value if our initialState is array then we use .push and if our initialState is object we add the property.

export const todoSlice = createSlice({
  name: "todo",
  initialState,
  reducers: {
    addTodo: (state, action) => {
      const todo = {
        id: nanoid(),
        text: action.payload.text,
      };
      state.todos.push(todo);
    },
    removeTodo: (state, action) => {
      state.todos = state.todos.filter((todo) => todo.id !== action.payload.id);
    },
  },
});

// ======================== Export Slice ========================//



// ======================== Export Reducers Functions ========================//
//export all reducers functions beacause we want to use it seperatly and the syntax is export const { functionName1, functionName2 } = fileName.actions;
// we have to export all reducers as well and the syntax is export default fileName.reducer

export const { addTodo, removeTodo } = todoSlice.actions;
export default todoSlice.reducer;

// ======================== Export Reducers Functions ========================//
