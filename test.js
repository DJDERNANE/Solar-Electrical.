var about_list = document.querySelector('.about_list'),
    career_list = document.querySelector('.career_list'),
    services_list = document.querySelector('.services_list'),
    product_list = document.querySelector('.product_list');
    about_list.addEventListener('mouseover', function(){
        about_list.classList.add('active')
    })
    about_list.addEventListener('mouseout', function(){
        about_list.classList.remove('active')
    })
    career_list.addEventListener('mouseover', function(){
        career_list.classList.add('active')
    })
    career_list.addEventListener('mouseout', function(){
        career_list.classList.remove('active')
    })
    services_list.addEventListener('mouseover', function(){
        services_list.classList.add('active')
    })
    services_list.addEventListener('mouseout', function(){
        services_list.classList.remove('active')
    })
    product_list.addEventListener('mouseover', function(){
        product_list.classList.add('active')
    })
    product_list.addEventListener('mouseout', function(){
        product_list.classList.remove('active')
    })