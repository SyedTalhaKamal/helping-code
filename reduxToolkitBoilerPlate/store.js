import { configureStore } from "@reduxjs/toolkit"; // configure store from reduxjs/toolkit
import todoReducer from "./todoSlice"; // import reducers from the specific slice


// export store and the syntax is export const storeName = configureStore()
// it contains an object
// first property is reducer and it contains object or single value and the syntex is reducer:{} or reducer : propertyName

export const store = configureStore({
  reducer: todoReducer,
}); 