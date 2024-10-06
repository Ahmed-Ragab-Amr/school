
function openSidebar() {
    var sidebar = document.getElementById('sidebar');
    sidebar.style.transform = 'translateX(0)';
    sidebar.style.display = 'block';
}

function closeSidebar() {
    var sidebar = document.getElementById('sidebar');
    sidebar.style.transform = 'translateX(100%)';
    setTimeout(function () {
        sidebar.style.display = 'none';
    }, 300); 
}

function logout(e) {
    // e.preventDefault();
    alert('تم تسجيل الخروج');
}

document.addEventListener("DOMContentLoaded", function() {
    document.querySelector(".event").onclick = function(e) {
        e.preventDefault();
        console.log("Default action prevented!");
    }
})
document.addEventListener("DOMContentLoaded", function() {
    document.querySelector(".evento").onclick = function(e) {
        e.preventDefault();
        console.log("Default action prevented!");
    }
})
document.addEventListener("DOMContentLoaded", function() {
    document.querySelector(".events").onclick = function(e) {
        e.preventDefault();
        console.log("Default action prevented!");
    }
})
document.addEventListener("DOMContentLoaded", function() {
    document.querySelector(".eventr").onclick = function(e) {
        e.preventDefault();
        console.log("Default action prevented!");
    }
})
document.addEventListener("DOMContentLoaded", function() {
    document.querySelector(".eventp").onclick = function(e) {
        e.preventDefault();
        console.log("Default action prevented!");
    }
})
document.addEventListener("DOMContentLoaded", function() {
    document.querySelector(".eventh").onclick = function(e) {
        e.preventDefault();
        console.log("Default action prevented!");
    }
})
document.addEventListener("DOMContentLoaded", function() {
    document.querySelector(".eventk").onclick = function(e) {
        e.preventDefault();
        console.log("Default action prevented!");
    }
})
document.addEventListener("DOMContentLoaded", function() {
    document.querySelector(".eventf").onclick = function(e) {
        e.preventDefault();
        console.log("Default action prevented!");
    }
})
function showSectionAndChangeIcon() {
    
    const svgIcon = document.getElementById('toggleIconSvg');
    const pngIcon = document.getElementById('toggleIconPng');
    const section = document.getElementById('section');
  

svgIcon.style.display = 'none';
pngIcon.style.display = 'inline';
section.style.display = 'block';
}

function hideSectionAndChangeIcon() {
    
    
    const svgIcon = document.getElementById('toggleIconSvg');
    const pngIcon = document.getElementById('toggleIconPng');
    const section = document.getElementById('section');
  

svgIcon.style.display = 'inline';
pngIcon.style.display = 'none';
section.style.display = 'none';
}
function showSectionAndChangeIcon2() {
    
    const svgIcon = document.getElementById('toggleIconSvg2');
    const pngIcon = document.getElementById('toggleIconPng2');
    const section = document.getElementById('section2');
  

svgIcon.style.display = 'none';
pngIcon.style.display = 'inline';
section.style.display = 'block';
}

function hideSectionAndChangeIcon2() {
    
    
    const svgIcon = document.getElementById('toggleIconSvg2');
    const pngIcon = document.getElementById('toggleIconPng2');
    const section = document.getElementById('section2');
  

svgIcon.style.display = 'inline';
pngIcon.style.display = 'none';
section.style.display = 'none';
}
function showSectionAndChangeIcon3() {
    
    const svgIcon = document.getElementById('toggleIconSvg3');
    const pngIcon = document.getElementById('toggleIconPng3');
    const section = document.getElementById('section3');
  

svgIcon.style.display = 'none';
pngIcon.style.display = 'inline';
section.style.display = 'block';
}

function hideSectionAndChangeIcon3() {
    
    
    const svgIcon = document.getElementById('toggleIconSvg3');
    const pngIcon = document.getElementById('toggleIconPng3');
    const section = document.getElementById('section3');
  

svgIcon.style.display = 'inline';
pngIcon.style.display = 'none';
section.style.display = 'none';
}
function showSectionAndChangeIcon4() {
    
    const svgIcon = document.getElementById('toggleIconSvg4');
    const pngIcon = document.getElementById('toggleIconPng4');
    const section = document.getElementById('section4');
  

svgIcon.style.display = 'none';
pngIcon.style.display = 'inline';
section.style.display = 'block';
}

function hideSectionAndChangeIcon4() {
    
    
    const svgIcon = document.getElementById('toggleIconSvg4');
    const pngIcon = document.getElementById('toggleIconPng4');
    const section = document.getElementById('section4');
  

svgIcon.style.display = 'inline';
pngIcon.style.display = 'none';
section.style.display = 'none';
}

window.addEventListener('load', function() {
    setTimeout(function() {
        document.getElementById('loadingOverlay').classList.add('hidden');
    }, 3000); // 5000 مللي ثانية = 5 ثواني
});

