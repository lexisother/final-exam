module.exports = {
  ...require('eslint-config-dmitmel/prettier.config.js'),
  plugins: ['prettier-plugin-tailwindcss', 'prettier-plugin-blade'],
  overrides: [
    {
      files: '*.blade.php',
      options: {
        parser: 'blade',
      },
    },
  ],
};
