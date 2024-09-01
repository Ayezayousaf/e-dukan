const cards= document.querySelectorAll('.card');
cards.forEach(card=>{
    card.addEventListener('mouseover',()=>{
        removeactive()
      card.classList.add('active')
    })
})
function removeactive()
{
    cards.forEach(card=>{
        card.classList.remove('active')
    })
};
