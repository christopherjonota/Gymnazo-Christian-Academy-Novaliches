document.querySelector('.logout-button').addEventListener('click', function () {
        document.getElementById('logout-form').submit();
});



const dropdownArrow = document.querySelectorAll('.dropdown-arrow');
const dropdownContent = document.querySelectorAll('.academic-dropdown');


for(let i =0; i < dropdownArrow.length; i++){
    dropdownArrow[i].addEventListener('click', function(){
        toggleDropdown(dropdownContent[i]);
        
    })
}
function toggleDropdown(div){
    const isToggle = div.style.display === 'flex';
    div.style.display = isToggle ? 'none' : 'flex';   
}


document.querySelector('.academic .dropdown-arrow').addEventListener('click', function(event){
    const academicDropdown = document.querySelector('.academic-dropdown');

    academicDropdown.classList.add('active');
    
});