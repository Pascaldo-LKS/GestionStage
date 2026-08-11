</main>

</div>


<footer class="footer">

    <p>
        &copy; <?= date('Y'); ?> GestionStage.
        Tous droits réservés.
    </p>

</footer>


<script>

function toggleMenu()
{
    const sidebar = document.getElementById('sidebar');

    if (sidebar) {
        sidebar.classList.toggle('active');
    }
}


document.addEventListener('click', function(event)
{
    const sidebar = document.getElementById('sidebar');

    const button = document.querySelector('.menu-toggle');


    if (
        window.innerWidth <= 768 &&
        sidebar &&
        button &&
        !sidebar.contains(event.target) &&
        !button.contains(event.target)
    )
    {
        sidebar.classList.remove('active');
    }
});

</script>

</body>

</html>