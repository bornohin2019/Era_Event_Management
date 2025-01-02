
  // handle theme toggle 
  const handleToggleBtn = () => {
    const darkModeEnabeld = document.body.classList.toggle('dark');

    // set theme in local storage 
    localStorage.setItem('theme', darkModeEnabeld ? 'dark' : 'light');
  }


  window.addEventListener('DOMContentLoaded', () => {
    // Check if the theme is saved in localStorage
    const savedTheme = localStorage.getItem('theme');

    // Apply the saved theme if it exists
    if (savedTheme === 'dark') {
      document.body.classList.add('dark');
    } else {
      document.body.classList.remove('dark');
    }
  });
