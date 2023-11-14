
function changeTheme(){
    const currentTheme = "dark";
    
    if (currentTheme) {
        document.documentElement.setAttribute('data-theme', currentTheme);
      
        if (currentTheme === 'light') {
            toggleSwitch.checked = true;
        }
    }
    
    function switchTheme(e) {
        if (e.target.checked) {
            document.documentElement.setAttribute('data-theme', 'light');
            localStorage.setItem('theme', 'light');
        }
        else {        document.documentElement.setAttribute('data-theme', 'dark');
              localStorage.setItem('theme', 'dark');
        }    
    }
    
    toggleSwitch.addEventListener('change', switchTheme, false);
}