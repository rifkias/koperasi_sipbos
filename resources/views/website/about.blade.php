@extends('layouts.main')
@section('main')

        <!--************************************
				Home Slider Start
		*************************************-->
		<div class="at-innerbanner">
			<div class="at-innerbannerbox">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="at-innerbannercontent">
								<div class="at-pagetitle">
									<h1>about us</h1>
								</div>
								<ol class="at-breadcrumb">
									<li><a href="javascript:void(0);">Home</a></li>
									<li class="at-active"><span>about us</span></li>
								</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--************************************
				Home Slider End
		*************************************-->
        <style>
            @media (max-width:700px){
                .at-sidebar{
                    display: none;
                }
                .at-aboutuscontent{
                    width: 100%!important;
                }
            }
        </style>
		<!--************************************
				Main Start
		*************************************-->
		<main id="at-main" class="at-main at-haslayout at-pagespace">
			<div class="container">
				<div class="row">
					<div class="at-content">
						<div class="at-aboutus">
							<aside id="at-sidebar" class="at-sidebar sticky">
								<div class="at-widget at-widgetlinking">
									<div class="at-widgetcontent">
										<ul>
											<li><a href="#at-companyoverview">Profil Koperasi</a></li>
											<li><a href="#at-companyhistory">Sejarah Koperasi Berkat Artha Sentosa</a></li>
											<li><a href="#at-whatwedo">Kelebihan Kami</a></li>
											<li><a href="#at-ourexpertteam">Struktur Pengurus</a></li>
											{{-- <li><a href="#at-clientfeedback">Testimonials</a></li>
											<li><a href="#at-careers">Careers</a></li> --}}
										</ul>
									</div>
								</div>
								<div class="at-widget at-widgettext">
									<div class="at-widgetcontent">
										<div class="at-widgettitleborder">
											<h3>Bagaimana kami membantu anda ?</h3>
										</div>
										<div class="at-description">
											<p>Jangan sungkan bertanya kepada kami, customer service kami dengan senang hati menjawab semua pertanyaan anda.</p>
										</div>
										<a class="at-btn at-btnw" href="javascript:void(0);">contact us</a>
										<div class="at-companypresentation">
											<a href="javascript:void(0);">
												<i class="icon-file-pdf"></i>
												<span>Company Presentation</span>
											</a>
										</div>
									</div>
								</div>
							</aside>

							<div class="at-aboutuscontent">
								<div id="at-aboutusslider" class="at-aboutusslider">
									<figure class="item">
										<img src="{{asset('/template/img/aboutus-2.jpg')}}" alt="image description">
										{{-- <figcaption style="color:black">Leading The Way In<span>Consulting Business For</span>Over 25 Years</figcaption> --}}
										<figcaption style="color:black">Tim Kami berisi <span>orang - orang yang sudah</span> ahli dibidangnya</figcaption>
									</figure>
								</div>
								<section id="at-companyoverview" class="at-companyoverview at-aboutsection">
									<div class="at-sectiontitleborder">
										<h2>Profil Koperasi</h2>
									</div>
									<div class="at-description">
										<p>Koperasi Simpan Pinjam ( KSP ) Berkat Artha Sentosa didirikan pada Bulan Desember 2020, dengan Akta Pendirian Nomor 2334 tanggal 28 Desember 2020 yang dibuat dihadapan Notaris Eny Haryati, SH dan telah mendapatkan Pengesahan dari Menteri Hukum dan Hak Asasi Manusia Republik Indonesia Nomor AHU-0007557.AH.01.26.Tahun 2020 tanggal 28 Desember 2020, dengan Tembusan Ke-Menteri Koperasi dan Usaha Kecil dan Menengah.</p>
										<p>Koperasi ini dibangun untuk mengambil peran dalam meningkatkan kesejahteraan anggota melalui aktivitas Simpan Pinjam. Disamping menjadi pilihan untuk anggota dana, Koperasi ini juga menyalurkan pinjaman berupa Pinjaman Modal Kerja, Multiguna dan Pinjaman Mikro.</p>
                                        <p style="margin:0px!important;">Visi <br>
                                            <ul class="at-liststyle at-liststylearrowright">
                                                <li>Membangun dan mengembangkan potensi serta kemampuan para anggotanya, demi tercapainya kesejahteraan pada bidang ekonomi dan sosial.</li>
                                            </ul>
                                        </p><br>
                                        <p style="margin:0px!important;">Misi</p>
										<ul class="at-liststyle at-liststylearrowright">
											<li>Secara aktif mengupayakan peningkatan kualitas hidup para anggotanya.</li>
											<li>Mengelola dana anggota dengan prinsip kehati-hatian (prudent)</li>
											<li>Memberikan pelayanan yang cepat dan tepat.</li>
											<li>Memberikan hasil usaha yang terbaik bagi anggotanya.</li>
											<li>Menyediakan produk simpanan dan pinjaman yang inovatif, bersaing dan memiliki nilai tambah serta didukung oleh sistem dan teknologi terkini dan handal.</li>
                                            <li>Memperkokoh perekonomian anggotanya dan masyarakat secara umum, sebagai dasar kekuatan ketahanan perekonomian nasional denganan mengadalkan Koperasi sebagai soko gurunya.</li>
                                            <li>Berusaha ikut memajukan dan mengembangkan  perekonomian nasional dengan berdasar asas kekeluargaan dan gotong royong.</li>
										</ul>
										<div class="at-features">
											<div class="row">
												<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 pull-left">
													<div class="at-feature">
														<span class="at-featureicon"><i class="fa fa-percent"></i></span>
														<div class="at-title">
															<h3>Suku Bunga</h3>
														</div>
														<div class="at-description">
															<p>Suku bunga yang kami berikan kompetitif dengan pesaing.</p>
														</div>
													</div>
												</div>
												<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 pull-left">
													<div class="at-feature">
														<span class="at-featureicon"><i class="icon-profile-male"></i></span>
														<div class="at-title">
															<h3>Tim Kami</h3>
														</div>
														<div class="at-description">
															<p>Kami memiliki tim yang sudah berpengalaman dibidang Keuangan.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>
								<section id="at-companyhistory" class="at-companyhistory at-aboutsection">
									<div class="at-sectionhead">
										<div class="at-sectiontitleborder">
											<h2>Sejarah Koperasi</h2>
										</div>
										<div class="at-description">
											<p>Koperasi Berkat Artha Sentosa Didirikan pada bulan Desember 2020 Dengan Akta Pendirian Nomor 2334 tanggal 28 Desember 2020 yang dibuat oleh Eny Haryati, SH dan telah mendapatkan Pengesahan dari Menteri Hukum dan Hak Asasi Manusia Republik Indonesia Nomor AHU-0007557.AH.01.26.Tahun 2020 tanggal 28 Desember 2020, dengan Tembusan Ke-Menteri Koperasi dan Usaha Kecil dan Menengah.</p>
										</div>
									</div>
									<figure class="at-fullimg">
										<img src="{{asset('template/img/aboutus-3.jpg')}}" alt="image description">
									</figure>
									<ul class="at-history">
										<li>
											<h3>2020</h3>
											<h4>Pendirian Koperasi Berkat Artha Sentosa</h4>
											<div class="at-description">
												<p>Kami berdiri ditahun 2020 yang bertempat di Hayam Wuruk Plaza Tower Jl. Hayam Wuruk No.108, RT.4/RW.9, Maphar, Kec. Taman Sari, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11160.</p>
											</div>
										</li>
									</ul>
								</section>
								<section id="at-whatwedo" class="at-whatwedo at-aboutsection">
									<div class="at-sectionhead">
										<div class="at-sectiontitleborder">
											<h2>Mengapa Memilih Koperasi <span style="color:#2c67f4;">Berkat Artha Sentosa</span></h2>
										</div>
										<div class="at-description">
											<p>.</p>
										</div>
									</div>
									<div id="at-whatwedoslider" class="at-whatwedoslider at-features owl-carousel">
										<div class="item">
											<div class="at-feature">
                                                <span class="at-featureicon"><i class="fa fa-percent"></i></span>
                                                <div class="at-title">
                                                    <h3>Suku Bunga</h3>
                                                </div>
                                                <div class="at-description">
                                                    <p>Suku bunga kami terjangkau dan kompetitif.</p>
                                                </div>
                                            </div>
										</div>
										<div class="item">
											<div class="at-feature">
                                                <span class="at-featureicon"><i class="icon-safebox"></i></span>
                                                <div class="at-title">
                                                    <h3>Aman & Terpercaya</h3>
                                                </div>
                                                <div class="at-description">
                                                    <p>Karena dikelola oleh personal yang sudah berpengalaman dibidangnya.</p>
                                                </div>
                                            </div>
										</div>
										<div class="item">
											<div class="at-feature">
                                                <span class="at-featureicon"><i class="fa fa-bolt"></i></span>
                                                <div class="at-title">
                                                    <h3>Pencairan Cepat</h3>
                                                </div>
                                                <div class="at-description">
                                                    <p>Proses pencairan yang cepat sesuai dengan prosedur perusahaan.</p>
                                                </div>
                                            </div>
										</div>
										<div class="item">
											<div class="at-feature">
                                                <span class="at-featureicon"><i class="icon-money-bag"></i></span>
                                                <div class="at-title">
                                                    <h3>Nilai Pinjaman Tinggi</h3>
                                                </div>
                                                <div class="at-description">
                                                    <p>Kami memberikan Pinjaman Tinggi berdasarkan jenis jaminan yang diberikan oleh calon debitur.</p>
                                                </div>
                                            </div>
										</div>
										{{-- <div class="item">
											<div class="at-feature">
												<span class="at-featureicon"><i class="icon-safebox"></i></span>
												<div class="at-title">
													<h3>Secure Payment</h3>
												</div>
												<div class="at-description">
													<p>It is a long established fact that a reader will be distracted by the readable content of a page looking at its layout.</p>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="at-feature">
												<span class="at-featureicon"><i class="icon-cart-12"></i></span>
												<div class="at-title">
													<h3>Consumer Consulting</h3>
												</div>
												<div class="at-description">
													<p>It is a long established fact that a reader will be distracted by the readable content of a page looking at its layout.</p>
												</div>
											</div>
										</div> --}}
									</div>
								</section>
                                <section id="at-ourexpertteam" class="at-ourexpertteam at-aboutsection">
									<div class="at-sectionhead">
										<div class="at-sectiontitleborder">
											<h2>Susunan Pengurus</h2>
										</div>
										<div class="at-description">
											<p>Koperasi Simpan Pinjam Jasa sejak berdiri telah menerapkan manajerial sistem. Rapat Anggota sebagai kekuasaan tertinggi memilih pengurus dan pengawas dari anggota untuk masa jabatan 3 tahun dengan formasi ketiga etnis yang ada. Pengurus bertindak sebagai <i>policy maker</i> dan pengawas operasional serta hal-hal yang berhubungan dengan segi organisasi koperasi. Dalam aktifitasnya beberapa pengurus ditunjuk sebagai supervisi sesuai dengan sistem operasional yang ada.</p>
										</div>
									</div>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="at-membercontent">
                                                <h3>Harun Jonathan</h3><br>
                                                <span>Ketua Koperasi</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="at-membercontent">
                                                <h3>Theo Anthares</h3><br>
                                                <span>Sekertaris</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="at-membercontent">
                                                <h3>Celine Rosavina</h3><br>
                                                <span>Bendahara</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="at-membercontent">
                                                <h3>Yayat Supriyatna</h3><br>
                                                <span>Pengawas</span>
                                            </div>
                                        </div>
                                    </div>
									{{-- <ul class="at-team">
										<li>
											<div class="at-member">
												<div class="at-membercontent">
													<h3><a href="javascript:void(0);">Harun Jonathan</a></h3><br>
													<span>Ketua Koperasi</span>
												</div>
											</div>
										</li>
										<li>
											<div class="at-member">
												<figure><a href="javascript:void(0);"><img src="{{asset('/template/images/team/img-02.jpg')}}" alt="image description"></a></figure>
												<div class="at-membercontent">
													<h3><a href="javascript:void(0);">Rosida Pakpahan</a></h3>
													<span>Manager</span>
													<div class="at-description">
														<p></p>
													</div>
													<ul class="at-socialicons">
														<li class="at-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
														<li class="at-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
													</ul>
													<a class="at-btn at-btnb" href="javascript:void(0);">profile</a>
												</div>
											</div>
										</li>
									</ul> --}}
								</section>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		<!--************************************
				Main End
		*************************************-->
@endsection
