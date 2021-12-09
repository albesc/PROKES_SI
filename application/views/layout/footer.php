            <!-- Footer -->
            <footer class="footer pt-0">
                <div class="row align-items-center justify-content-lg-between">
                    <!-- <div class="col-lg-6">
                        <div class="copyright text-center  text-lg-left  text-muted">
                            &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
                            </li>
                        </ul>
                    </div> -->
                </div>
            </footer>
            </div>
            </div>
            <!-- Argon Scripts -->
            <!-- Core -->
            <script src="<?= base_url(); ?>assets/vendor/jquery/dist/jquery.min.js"></script>
            <script src="<?= base_url(); ?>assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
            <script src="<?= base_url(); ?>assets/vendor/js-cookie/js.cookie.js"></script>
            <script src="<?= base_url(); ?>assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
            <script src="<?= base_url(); ?>assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
            <!-- Optional JS -->
            <script src="<?= base_url(); ?>assets/vendor/chart.js/dist/Chart.min.js"></script>
            <script src="<?= base_url(); ?>/assets/vendor/chart.js/dist/Chart.extension.js"></script>
            <!-- Argon JS -->
            <script src="<?= base_url(); ?>assets/js/argon.js?v=1.2.0"></script>
            <script>
                $('.custom-file-input').on('change', function() {
                    let fileName = $(this).val().split('\\').pop();
                    $(this).next('.custom-file-label').addClass("selected").html(fileName);
                })
            </script>
            <script type="text/javascript">
                var ctx = document.getElementById('myChart').getContext('2d');
                var chart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: [
                            <?php
                            foreach($countjk as $data) {
                                echo "'" . $data['penduduk'] . "',";
                            }
                            ?>
                        ],
                        datasets: [{
                            label: 'Perbandingan Pria dan Wanita',
                            backgroundColor: "#4e73df",
                            hoverBackgroundColor: "#2e59d9",
                            borderColor: "#4e73df",
                            data: [
                                <?php
                                foreach ($countjk as $data) {
                                    echo $data['pndk_jk'];
                                }
                                ?>
                            ]
                        }]
                    },
                    options: {
                        maintainAspectRatio: false,
                        layout: {
                            padding: {
                                left: 10,
                                right: 25,
                                top: 25,
                                bottom: 0
                            }
                        },
                        scales: {
                            xAxes : [{
                                time : {
                                    unit : 'Warga'
                                },
                                gridLines : {
                                    display : false,
                                    drawBorder : false
                                },
                                ticks : {
                                    maxTicksLimit : 20
                                },
                                maxBarThickness : 50,   
                            }],
                            yAxes : [{
                                gridLines : {
                                    color : "rgb(234, 236, 244)",
                                    zeroLineColor: "rgb(234, 236, 244)",
                                    drawBorder : false,
                                    borderDash: [2],
                                    zeroLineBorderDash: [2]
                                }
                            }],
                        },
                        tooltips : {
                            titleMarginBottom : 10,
                            titleFontColor : '#6e707e',
                            titleFontSize : 14,
                            backgroundColor : "rgb(255,255,255)",
                            bodyFontColor : "#858796",
                            borderColor : '#dddfeb',
                            borderWidth : 1,
                            xPadding : 15,
                            yPadding : 15,
                            displayColors : false,
                            caretPadding : 10,
                        },
                    }
                });
            </script>
            </body>

            </html>