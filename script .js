//simple alert when form is submitted
document.getElementById('myForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission
    alert('Form submitted successfully!');
});