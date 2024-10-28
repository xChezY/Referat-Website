module.exports = {
    content: [
        "./contact/**/*.php",
        "./includes/**/*.php",
        "./plants/**/*.php",
        "./registerplant/**/*.php",
        "./index.php",
        "./node_modules/flowbite/**/*.js"

    ],
    theme: {
      extend: {},
    },
    plugins: [
      require('flowbite/plugin'),
    ],
  }