function fullOpinion(event) {
  id = event.currentTarget.id;
  event.currentTarget.innerText = document.getElementById('full-' + id).innerText;
}

function partOpinion(event) {
  id = event.currentTarget.id;
  event.currentTarget.innerText = document.getElementById('full-' + id).innerText.substring(0, 25) + '...';
}

for(let target of document.getElementsByClassName('opinion-display')) {
  target.addEventListener('mouseover', fullOpinion);
  target.addEventListener('mouseleave', partOpinion);
}