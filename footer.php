<footer>
    <p>&copy; <?php echo date('Y'); ?> My Blank Theme. All rights reserved.</p>
</footer>
<div id="custom-cursor"></div>


<script>
    window.addEventListener('load', function() {
        var loadingOverlay = document.querySelector(".loading-overlay");
        var spinner = document.querySelector(".loading-spin svg");
        var cursor = document.querySelector("#custom-cursor");

        cursor.style.display = "none";

        // Function to handle animation end
        function onAnimationEnd() {
            spinner.classList.add('animation-paused');

            // Fade out loading overlay
            setTimeout(function() {
                loadingOverlay.style.opacity = 0;
                loadingOverlay.style.transition = 'opacity 1s ease';

                // After fading out, hide the overlay
                setTimeout(function() {
                    loadingOverlay.style.display = 'none';
                    cursor.style.display = "block";
                }, 1000); // Adjust delay to match transition duration
            }, 500); // Adjust delay to match animation duration
        }

        // Add multiple event listeners for different browsers
        var animationEndEvents = 'webkitAnimationEnd oanimationend msAnimationEnd animationend';
        animationEndEvents.split(' ').forEach(function(event) {
            spinner.addEventListener(event, onAnimationEnd);
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        function showLoadingOverlay() {
            var loadingOverlay = document.querySelector(".loading-overlay");
            var spinner = document.querySelector(".loading-spin svg");

            loadingOverlay.style.display = 'flex';
            spinner.classList.remove('animation-paused');

            // Delay to ensure display update before applying opacity transition
            setTimeout(function() {
                loadingOverlay.style.opacity = 1;
                loadingOverlay.style.transition = 'opacity 1s ease';
            }, 100);
        }

        function hideLoadingOverlay() {
            var loadingOverlay = document.querySelector(".loading-overlay");

            loadingOverlay.style.opacity = 0; // Hide the overlay
            loadingOverlay.style.transition = 'opacity 1s ease';

            setTimeout(function() {
                loadingOverlay.style.display = 'none';
            }, 1000); // Adjust delay to match transition duration
        }

        document.addEventListener('click', function(event) {
            var target = event.target;

            if (target.tagName === 'A' || target.tagName === 'BUTTON') {
                event.preventDefault();

                showLoadingOverlay();

                // Delay before redirecting (adjust as needed)
                setTimeout(function() {
                    if (target.tagName === 'A') {
                        window.location.href = target.href; // Redirect to clicked element's href
                    } else if (target.tagName === 'BUTTON' && target.dataset.href) {
                        window.location.href = target.dataset.href;
                    }
                }, 1000); // Adjust delay before redirection
            }
        });
    });
</script>






<script>
document.addEventListener('DOMContentLoaded', () => {
    const cursor = document.getElementById('custom-cursor');

    // Function to move the cursor
    const moveCursor = (e) => {
        const mouseY = e.clientY;
        const mouseX = e.clientX;
        
        cursor.style.transform = `translate3d(${mouseX}px, ${mouseY}px, 0)`;
    };

    // Event listener for mouse movement
    document.addEventListener('mousemove', moveCursor);

    // Add and remove pointer class on hover
    const addPointerCursor = () => {
        cursor.classList.add('pointer');
    };
    
    const removePointerCursor = () => {
        cursor.classList.remove('pointer');
    };

    document.querySelectorAll('a, button, [role="button"], [class*="pointer"]').forEach(el => {
        el.addEventListener('mouseenter', addPointerCursor);
        el.addEventListener('mouseleave', removePointerCursor);
    });
});
</script>


<?php wp_footer(); ?>
</body>


</html>
