module.exports = {
    moduleFileExtensions: ['js', 'json', 'vue'],
    transform: {
      '^.+\\.vue$': '@vue/vue3-jest',
      '^.+\\.js$': 'babel-jest',
    },
    testEnvironment: 'jest-environment-jsdom',
    setupFiles: ['./jest.setup.js'],
  };
  