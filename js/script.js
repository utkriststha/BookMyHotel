const toggleBtn = document.querySelector('.toggleBtn');
const navlinks = document.querySelector('.navlinks');
const account = document.querySelector('.account');
const accountlogin = document.querySelector('.accountlogin')

toggleBtn.addEventListener('click', () => {
    if (!account) {
        navlinks.classList.toggle('active')
        accountlogin.classList.toggle('active')
    } else {
        account.classList.toggle('active')
        navlinks.classList.toggle('active')
    }
})