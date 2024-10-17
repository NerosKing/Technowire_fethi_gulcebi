
// Smooth scroll to top
const scrollToBottomButton = document.getElementById('bottomButton');
function bottomFunction() {
    window.scrollTo({top: document.documentElement.scrollHeight, behavior: 'smooth'});
}
