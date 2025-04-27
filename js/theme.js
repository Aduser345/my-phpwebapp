var darkMode = false;
// Select the button
const btn = document.querySelector(".btn-toggle");
// Select the stylesheet <link>
const theme = document.querySelector("#theme-link");

// default to system setting
if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
	darkMode = true;
}

// preference from localStorage should overwrite
if (localStorage.getItem('theme') === 'dark') {
	darkMode = true;
} else if (localStorage.getItem('theme') === 'light') {
	darkMode = false;
}

if (darkMode) {
	document.body.classList.toggle('dark');
    document.getElementById("theme-toggle").checked = true;
    theme.href = "theme/dark-theme.css";
}

document.addEventListener('DOMContentLoaded', () => {

    document.getElementById('theme-toggle').addEventListener('click', () => {
		document.body.classList.toggle('dark');
    	localStorage.setItem('theme', document.body.classList.contains('dark') ? 'dark' : 'light');
	});

});

        

        // Listen for a click on the button
        btn.addEventListener("click", function() {
        // If the current URL contains "ligh-theme.css"
        if (theme.getAttribute("href") == "theme/light-theme.css") {
            // ... then switch it to "dark-theme.css"
            theme.href = "theme/dark-theme.css";
        // Otherwise...
        } else {
            // ... switch it to "light-theme.css"
            theme.href = "theme/light-theme.css";
            document.getElementById("theme-toggle").checked = false;
        }
        });