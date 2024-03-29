function headerMenuToggle() {
    var top_menu = document.getElementsByClassName("top_menu")[0];
    top_menu.classList.toggle("show_menu");
}

window.onload = function(){
    console.log("KiwiSkin Theme by Kiwi");
    console.log("https://github.com/kdo9921/KiwiSkin-for-Wordpress");
    sidebarSticky();
}

function sidebarSticky() {
    var sidebar = document.getElementsByClassName('site-sidebar')[0];
    var height = sidebar.offsetHeight + 98;
    var style = `
    <style>
    @media (min-height : ${height}px) {
	    .site-sidebar {
			position: sticky;
			top: 66px;
		}
	}
    </style>
    `;
    var style_div = document.getElementById('sidebar_style');
    style_div.innerHTML = style;
}