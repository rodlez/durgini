<!-- Footer -->
<footer class="footer bg-primary py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-4 my-3">
                <img src="/images/web/footer-logo.png" alt="" width="150" />
            </div>
            <div class="col-md-4 my-3">
                <h6 class="text-light"><?php echo $footerLinks['title']; ?></h6>
                <ul class="list-unstyled">
                    <li class="text-dark fw-bold text-uppercase">
                        <?php echo $footerLinks['subtitle1']; ?>
                    </li>
                    <li class="text-warning">
                        <a href="#" class="footer-link"><?php echo $footerLinks['link1']; ?></a> |
                        <a href="#" class="footer-link"><?php echo $footerLinks['link2']; ?></a>
                    </li>
                    <li>
                        <a href="#" class="footer-link"><?php echo $footerLinks['link3']; ?></a>
                    </li>
                    <li class="text-dark fw-bold text-uppercase">
                        <?php echo $footerLinks['subtitle2']; ?>
                    </li>
                    <li class="text-warning">
                        <a href="/" class="footer-link"><?php echo $footerLinks['link4']; ?></a> |
                        <a href="/about" class="footer-link"><?php echo $footerLinks['link5']; ?></a> |
                        <a href="/contacto" class="footer-link"><?php echo $footerLinks['link6']; ?></a> |
                        <a href="/blog" class="footer-link"><?php echo $footerLinks['link7']; ?></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 my-3 footer-social">
                <div class="mb-4">
                    <a href="#" class="text-decoration-none">
                        <i class="fab fa-facebook fa-2x text-light mx-2"></i>
                    </a>
                    <a href="#" class="text-decoration-none">
                        <i class="fab fa-youtube fa-2x text-light mx-2"></i>
                    </a>
                    <a href="#" class="text-decoration-none" target="_blank">
                        <i class="fab fa-instagram fa-2x text-light mx-2"></i>
                    </a>
                    <a href="#" class="text-decoration-none" target="_blank">
                        <i class="fab fa-linkedin fa-2x text-light mx-2"></i>
                    </a>
                </div>
                <p class="text-light">
                    <?php echo $footerLinks['socialText']; ?>
                </p>
                <div class="row">
                    <div class="col-12">
                        <a href="tel:123456789" class="footer-link">+34 123456789</a>
                        <i class="fa fa-flip-horizontal fa-phone fa-1x text-light mx-2"></i>
                    </div>
                    <div class="col-12">
                        <a href="mailto:contact@site.com" class="footer-link">info@web.com</a>
                        <i class="fa fa-envelope fa-1x text-light mx-2"></i>
                    </div>
                </div>
                <p class="copyright">
                    web by <a href="xavrod.com" class="copyright-link">xavrod</a>
                </p>

            </div>
        </div>
    </div>
</footer>

<!-- To the Top Button -->
<button id="to-top" class="to-top-btn">
    <img src="/images/web/up-arrow.png" alt="" />
</button>

<!-- JS -->
<script src="/js/script.js"></script>
<script src="/js/bootstrap.bundle.min.js"></script>
<!-- JQUERY -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- Trumbowyg TEXTAREA EDITOR-->
<script src="/dist/trumbowyg.min.js"></script>
<!-- Import Trumbowyg plugins... -->
<script src="/dist/plugins/upload/trumbowyg.upload.min.js"></script>
<!-- Trumbowyg Script -->
<script src="/js/trumbowyg.js"></script>
<!-- TinyMCE EDITOR -->
<script src="/tinymce/tinymce/tinymce.min.js" referrerpolicy="origin"></script>
<!-- TinyMCE Script -->
<script src="/js/tinymceScript.js"></script>

</body>

</html>