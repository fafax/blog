<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <ul class="list-inline text-center">
                        <li class="list-inline-item">
                           <span class="fa-stack fa-lg">
                              <a href="https://www.linkedin.com/in/fabien-hamayon-2b072698/" target="_blank">
                                 <i class="fa fa-circle fa-stack-2x"></i>
                                 <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                              </a>
                              
                           </span>
                        </li>
                        <li class="list-inline-item">
                           <span class="fa-stack fa-lg">
                              <a href="https://www.youtube.com/channel/UCBB2pQPkS2jmI3LPhUCxYgA" target="_blank">
                                 <i class="fa fa-circle fa-stack-2x"></i>
                                 <i class="fa fa-youtube fa-stack-1x fa-inverse"></i>
                              </a>
                              
                           </span>
                        </li>
                        <li class="list-inline-item">
                           <span class="fa-stack fa-lg">
                              <a href="https://github.com/fafax" target="_blank">
                                 <i class="fa fa-circle fa-stack-2x"></i>
                                 <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                              </a>
                           </span>
                        </li>
                    </ul>
             
                        {%if session.admin %}
                            <a class="nav-link center" href="index.php?post=administration">Administration</a>
                        {% endif %}
                     
                    <p class="text-muted copyright">Copyright&nbsp;©&nbsp;Fabien HAMAYON 2019</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="../public/assets/js/jquery.min.js"></script>
    <script src="../public/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../public/assets/js/clean-blog.js"></script>
    <script src="../public/assets/js/main.js"></script>
</body>

</html>

