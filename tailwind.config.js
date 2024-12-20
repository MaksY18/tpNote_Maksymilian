module.exports = {
  content: ["./*.html"], // Ajuste ce chemin si tes fichiers HTML sont ailleurs
  theme: {
    extend: {
      colors: {
        blue: {
          600: '#2563EB',
        },
        pink: {
          600: '#DB2777',
        },
        purple: {
          500: '#8B5CF6',
        },
      },
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
};
