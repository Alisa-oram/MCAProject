const userIcon = document.getElementById('userIcon');
    const dropdown = document.getElementById('userDropdown');

    userIcon.addEventListener('click', () => {
        dropdown.classList.toggle('d-none');
    });