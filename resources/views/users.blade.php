<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  

    <link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />

    <meta name="apple-mobile-web-app-title" content="CodePen">

    <link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />

    <link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-b4b4269c16397ad2f0f7a01bcdf513a1994f4c94b8af2f191c09eb0d601762b1.svg" color="#111" />



  
    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"></script>


  <title>CodePen - Todo-list</title>

    <link rel="canonical" href="https://codepen.io/zhanglidora/pen/BoXmag">
  
  
  
  
<style>
hr {
  margin: 20px 0;
  border: 0;
  border-top: 1px dashed #c5c5c5;
  border-bottom: 1px dashed #f7f7f7;
}

.learn a {
  font-weight: normal;
  text-decoration: none;
  color: #b83f45;
}

.learn a:hover {
  text-decoration: underline;
  color: #787e7e;
}

.learn h3,
.learn h4,
.learn h5 {
  margin: 10px 0;
  font-weight: 500;
  line-height: 1.2;
  color: #000;
}

.learn h3 {
  font-size: 24px;
}

.learn h4 {
  font-size: 18px;
}

.learn h5 {
  margin-bottom: 0;
  font-size: 14px;
}

.learn ul {
  padding: 0;
  margin: 0 0 30px 25px;
}

.learn li {
  line-height: 20px;
}

.learn p {
  font-size: 15px;
  font-weight: 300;
  line-height: 1.3;
  margin-top: 0;
  margin-bottom: 0;
}

#issue-count {
  display: none;
}

.quote {
  border: none;
  margin: 20px 0 60px 0;
}

.quote p {
  font-style: italic;
}

.quote p:before {
  content: '“';
  font-size: 50px;
  opacity: .15;
  position: absolute;
  top: -20px;
  left: 3px;
}

.quote p:after {
  content: '”';
  font-size: 50px;
  opacity: .15;
  position: absolute;
  bottom: -42px;
  right: 3px;
}

.quote footer {
  position: absolute;
  bottom: -40px;
  right: 0;
}

.quote footer img {
  border-radius: 3px;
}

.quote footer a {
  margin-left: 5px;
  vertical-align: middle;
}

.speech-bubble {
  position: relative;
  padding: 10px;
  background: rgba(0, 0, 0, .04);
  border-radius: 5px;
}

.speech-bubble:after {
  content: '';
  position: absolute;
  top: 100%;
  right: 30px;
  border: 13px solid transparent;
  border-top-color: rgba(0, 0, 0, .04);
}

.learn-bar > .learn {
  position: absolute;
  width: 272px;
  top: 8px;
  left: -300px;
  padding: 10px;
  border-radius: 5px;
  background-color: rgba(255, 255, 255, .6);
  transition-property: left;
  transition-duration: 500ms;
}

@media (min-width: 899px) {
  .learn-bar {
    width: auto;
    padding-left: 300px;
  }

  .learn-bar > .learn {
    left: 8px;
  }
}

html,
body {
  margin: 0;
  padding: 0;
}

button {
  margin: 0;
  padding: 0;
  border: 0;
  background: none;
  font-size: 100%;
  vertical-align: baseline;
  font-family: inherit;
  font-weight: inherit;
  color: inherit;
  -webkit-appearance: none;
  appearance: none;
  -webkit-font-smoothing: antialiased;
  -moz-font-smoothing: antialiased;
  font-smoothing: antialiased;
}

body {
  font: 14px 'Helvetica Neue', Helvetica, Arial, sans-serif;
  line-height: 1.4em;
  background: #f5f5f5;
  color: #4d4d4d;
  min-width: 230px;
  max-width: 550px;
  margin: 0 auto;
  -webkit-font-smoothing: antialiased;
  -moz-font-smoothing: antialiased;
  font-smoothing: antialiased;
  font-weight: 300;
}

button,
input[type="checkbox"] {
  outline: none;
}

.hidden {
  display: none;
}

.todoapp {
  background: #fff;
  margin: 130px 0 40px 0;
  position: relative;
  box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2),
              0 25px 50px 0 rgba(0, 0, 0, 0.1);
}

.todoapp input::-webkit-input-placeholder {
  font-style: italic;
  font-weight: 300;
  color: #e6e6e6;
}

.todoapp input::-moz-placeholder {
  font-style: italic;
  font-weight: 300;
  color: #e6e6e6;
}

.todoapp input::input-placeholder {
  font-style: italic;
  font-weight: 300;
  color: #e6e6e6;
}

.todoapp h1 {
  position: absolute;
  top: -155px;
  width: 100%;
  font-size: 100px;
  font-weight: 100;
  text-align: center;
  color: rgba(175, 47, 47, 0.15);
  -webkit-text-rendering: optimizeLegibility;
  -moz-text-rendering: optimizeLegibility;
  text-rendering: optimizeLegibility;
}

.new-todo,
.edit {
  position: relative;
  margin: 0;
  width: 100%;
  font-size: 24px;
  font-family: inherit;
  font-weight: inherit;
  line-height: 1.4em;
  border: 0;
  outline: none;
  color: inherit;
  padding: 6px;
  border: 1px solid #999;
  box-shadow: inset 0 -1px 5px 0 rgba(0, 0, 0, 0.2);
  box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
  -moz-font-smoothing: antialiased;
  font-smoothing: antialiased;
}

.new-todo {
  padding: 16px 16px 16px 60px;
  border: none;
  background: rgba(0, 0, 0, 0.003);
  box-shadow: inset 0 -2px 1px rgba(0,0,0,0.03);
}

.main {
  position: relative;
  z-index: 2;
  border-top: 1px solid #e6e6e6;
}

label[for='toggle-all'] {
  display: none;
}

.toggle-all {
  position: absolute;
  top: -55px;
  left: -12px;
  width: 60px;
  height: 34px;
  text-align: center;
  border: none; /* Mobile Safari */
}

.toggle-all:before {
  content: '❯';
  font-size: 22px;
  color: #e6e6e6;
  padding: 10px 27px 10px 27px;
}

.toggle-all:checked:before {
  color: #737373;
}

.todo-list {
  margin: 0;
  padding: 0;
  list-style: none;
}

.todo-list li {
  position: relative;
  font-size: 24px;
  box-shadow: 0 -1px 0 #ededed;
  overflow: hidden;
}

.todo-list li:last-child {
  border-bottom: none;
}

.todo-list li.editing {
  border-bottom: none;
  padding: 0;
}

.todo-list li.editing .edit {
  display: block;
  width: 506px;
  padding: 13px 17px 12px 17px;
  margin: 0 0 0 43px;
}

.todo-list li.editing .view {
  display: none;
}

.todo-list li .toggle {
  text-align: center;
  width: 40px;
  /* auto, since non-WebKit browsers doesn't support input styling */
  height: auto;
  position: absolute;
  top: 0;
  bottom: 0;
  margin: auto 0;
  border: none; /* Mobile Safari */
  -webkit-appearance: none;
  appearance: none;
}

.todo-list li .toggle:after {
  content: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="-10 -18 100 135"><circle cx="50" cy="50" r="50" fill="none" stroke="#ededed" stroke-width="3"/></svg>');
}

.todo-list li .toggle:checked:after {
  content: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="-10 -18 100 135"><circle cx="50" cy="50" r="50" fill="none" stroke="#bddad5" stroke-width="3"/><path fill="#5dc2af" d="M72 25L42 71 27 56l-4 4 20 20 34-52z"/></svg>');
}

.todo-list li label {
  white-space: pre;
  word-break: break-word;
  padding: 15px 60px 15px 15px;
  margin-left: 45px;
  display: block;
  line-height: 1.2;
  transition: color 0.4s;
}

.todo-list li.completed label {
  color: #d9d9d9;
  text-decoration: line-through;
}

.todo-list li .destroy {
  display: none;
  position: absolute;
  top: 0;
  right: 10px;
  bottom: 0;
  width: 40px;
  height: 40px;
  margin: auto 0;
  font-size: 30px;
  color: #cc9a9a;
  margin-bottom: 11px;
  transition: color 0.2s ease-out;
}

.todo-list li .destroy:hover {
  color: #af5b5e;
}

.todo-list li .destroy:after {
  content: '×';
}

.todo-list li:hover .destroy {
  display: block;
}

.todo-list li .edit {
  display: none;
}

.todo-list li.editing:last-child {
  margin-bottom: -1px;
}

.footer {
  color: #777;
  padding: 10px 15px;
  height: 20px;
  text-align: center;
  border-top: 1px solid #e6e6e6;
}

.footer:before {
  content: '';
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  height: 50px;
  overflow: hidden;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.2),
              0 8px 0 -3px #f6f6f6,
              0 9px 1px -3px rgba(0, 0, 0, 0.2),
              0 16px 0 -6px #f6f6f6,
              0 17px 2px -6px rgba(0, 0, 0, 0.2);
}

.todo-count {
  float: left;
  text-align: left;
}

.todo-count strong {
  font-weight: 300;
}

.filters {
  margin: 0;
  padding: 0;
  list-style: none;
  position: absolute;
  right: 0;
  left: 0;
}

.filters li {
  display: inline;
}

.filters li a {
  color: inherit;
  margin: 3px;
  padding: 3px 7px;
  text-decoration: none;
  border: 1px solid transparent;
  border-radius: 3px;
}

.filters li a.selected,
.filters li a:hover {
  border-color: rgba(175, 47, 47, 0.1);
}

.filters li a.selected {
  border-color: rgba(175, 47, 47, 0.2);
}

.clear-completed,
html .clear-completed:active {
  float: right;
  position: relative;
  line-height: 20px;
  text-decoration: none;
  cursor: pointer;
  position: relative;
}

.clear-completed:hover {
  text-decoration: underline;
}

.info {
  margin: 65px auto 0;
  color: #bfbfbf;
  font-size: 10px;
  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
  text-align: center;
}

.info p {
  line-height: 1;
}

.info a {
  color: inherit;
  text-decoration: none;
  font-weight: 400;
}

.info a:hover {
  text-decoration: underline;
}

/*
  Hack to remove background from Mobile Safari.
  Can't use it globally since it destroys checkboxes in Firefox
*/
@media screen and (-webkit-min-device-pixel-ratio:0) {
  .toggle-all,
  .todo-list li .toggle {
    background: none;
  }

  .todo-list li .toggle {
    height: 40px;
  }

  .toggle-all {
    -webkit-transform: rotate(90deg);
    transform: rotate(90deg);
    -webkit-appearance: none;
    appearance: none;
  }
}

@media (max-width: 430px) {
  .footer {
    height: 50px;
  }

  .filters {
    bottom: 10px;
  }
}
</style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
</head>

<body translate="no">
  <html lang="en">

<head>
  <meta charset="UTF-8">
  <title>RedoMVC</title>
  <link rel="stylesheet" href="./index.css" />
</head>

<body>
  <div id="content"></div>
</body>

</html>
  <script src='//cdnjs.cloudflare.com/ajax/libs/react/0.14.3/react.min.js'></script>
<script src='https://rawgit.com/chenglou/react-motion/cc852fe787bb15a8b4a9e51538e03c57d5543d2e/build/react-motion.js'></script>
      <script id="rendered-js" >
var TransitionMotion = ReactMotion.TransitionMotion;
var spring = ReactMotion.spring;
var presets = ReactMotion.presets;

const Demo = React.createClass({ displayName: "Demo",
  getInitialState() {
    return {
      todos: {
        // key is creation date
        't1': { text: 'Board the plane' },
        't2': { text: 'Sleep' },
        't3': { text: 'Try to finish coneference slides' },
        't4': { text: 'Eat cheese and drink wine' },
        't5': { text: 'Go around in Uber' },
        't6': { text: 'Talk with conf attendees' },
        't7': { text: 'Show Demo 1' },
        't8': { text: 'Show Demo 2' },
        't9': { text: 'Lament about the state of animation' },
        't10': { text: 'Show Secret Demo' },
        't11': { text: 'Go home' } },

      value: '' };

  },

  // logic from todo, unrelated to animation
  handleChange({ target: { value } }) {
    this.setState({ value });
  },

  handleSubmit(e) {
    e.preventDefault();
    const { todos, value } = this.state;
    this.setState({
      todos: {
        ['t' + Date.now()]: { text: value },
        ...todos } });


  },

  handleDestroy(date) {
    const { todos } = this.state;
    delete todos[date];
    this.forceUpdate();
  },

  // actual animation-related logic
  getDefaultValue() {
    const { todos } = this.state;
    return Object.keys(todos).
    reduce((configs, date) => {
      configs[date] = {
        height: spring(0),
        opacity: spring(1),
        data: todos[date] };

      return configs;
    }, {});
  },

  getEndValue() {
    const { todos, value } = this.state;
    return Object.keys(todos).
    filter(date => {
      const todo = todos[date];
      return todo.text.toUpperCase().indexOf(value.toUpperCase()) >= 0;
    }).
    reduce((configs, date) => {
      configs[date] = {
        height: spring(60, presets.wobbly),
        opacity: spring(1, presets.wobbly),
        data: todos[date] };

      return configs;
    }, {});
  },

  willEnter(date) {
    return {
      height: spring(0),
      opacity: spring(2),
      data: this.state.todos[date] };

  },

  willLeave(date, keyThatJustLeft) {
    return {
      height: spring(0), //mounting process
      opacity: spring(10),
      data: keyThatJustLeft.data };

  },

  render() {
    const { todos, value } = this.state;
    return /*#_PURE_*/(
      React.createElement("section", { className: "todoapp" }, /*#_PURE_*/
      React.createElement("header", { className: "header" }, /*#_PURE_*/
      React.createElement("h1", null, "todos"), /*#_PURE_*/
      React.createElement("form", { onSubmit: this.handleSubmit }, /*#_PURE_*/
      React.createElement("input", {
        autoFocus: true,
        className: "new-todo",
        placeholder: "What needs to be done?",
        value: value,
        onChange: this.handleChange }))), /*#_PURE_*/



      React.createElement("section", { className: "main" }, /*#_PURE_*/
      React.createElement("input", { className: "toggle-all", type: "checkbox", onChange: this.handleToggleAll }), /*#_PURE_*/
      React.createElement(TransitionMotion, { defaultStyles: this.getDefaultValue(), styles: this.getEndValue(), willLeave: this.willLeave,
        willEnter: this.willEnter },
      (configs) => /*#_PURE_*/
      React.createElement("ul", { className: "todo-list" },
      Object.keys(configs).map(date => {
        const config = configs[date];
        const { data: { text }, ...style } = config;
        return /*#_PURE_*/(
          React.createElement("li", { key: date, style: style }, /*#_PURE_*/
          React.createElement("div", { className: "view" }, /*#_PURE_*/

          React.createElement("label", null, text), /*#_PURE_*/
          React.createElement("button", {
            className: "destroy",
            onClick: this.handleDestroy.bind(null, date) }))));




      })))), /*#_PURE_*/




      React.createElement("footer", { className: "footer" }, /*#_PURE_*/
      React.createElement("span", { className: "todo-count" }, /*#_PURE_*/
      React.createElement("strong", null,
      Object.keys(todos).filter(key => !todos[key].isDone).length), " item left"))));





  } });




React.render( /*#_PURE_*/React.createElement(Demo, null), document.querySelector('#content'));
//# sourceURL=pen.js
    </script>

  
</body>

</html>
