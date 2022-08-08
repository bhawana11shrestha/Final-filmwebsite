const userCardTemplete = document.querySelector("data-user-template")

fetch("https://jsonplaceholder.typicode.com/users")
.then(res => res.json())
.then(date => {
	const card == userCardTemplete.content.cloneNode(true)
})