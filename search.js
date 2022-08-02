const search =()=>{
    const searchBox = document.getElementById('search').value;
    const storeItems = document.getElementById('trip-list');
    const trip = document.querySelectorAll('.trip-item');
    const tName = document.getElementsByTagName('li');

    for(let i=0; i<tName.length; i++){
        let match = trip[i].getElementsByClassName('trip-item')[0];

        if(match){
           let textValue =  match.textContent || match.innerHTML
           if(textValue.indexOf('searchBox') > -1){
            trip[i].style.display = "";
           }
           else{
            trip[i].style.display = "none";
           }
        }
    }
}
