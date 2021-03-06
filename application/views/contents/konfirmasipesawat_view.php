<div id="wrapper">
    <a id="booking"></a>
    <!--Booking-->
    <section class="section section-feature-grey">

    <!-- steps progress -->
    <ul class="steps is-narrow is-medium is-centered has-content-centered mt-60">
      <li class="steps-segment has-gaps">
        <a href="#" class="has-text-dark">
          <span class="steps-marker">
            <i class="fas fa-plane fa-sm"></i>
          </span>
          <div class="steps-content">
            <p class="heading">Booking</p>
          </div>
        </a>
      </li>
      <li class="steps-segment has-gaps">
        <a href="#" class="has-text-dark">
            <span class="steps-marker">
            <i class="fas fa-plane fa-sm"></i>
            </span>
            <div class="steps-content">
            <p class="heading">Detail</p>
            </div>
        </a>
      </li>
      <li class="steps-segment is-active has-gaps">
        <a href="#" class="has-text-dark">
            <span class="steps-marker">
                <i class="fas fa-plane fa-sm"></i>
            </span>
            <div class="steps-content">
            <p class="heading">Confirmation</p>
            </div>
        </a>
      </li>
      <li class="steps-segment">
        <span class="steps-marker">
            <i class="fas fa-plane fa-sm"></i>
        </span>
        <div class="steps-content">
          <p class="heading">E-Ticket</p>
        </div>
      </li>
    </ul>
    <!-- end of steps progress -->

    <div class="section-title-wrapper has-text-centered">
        <h2 class="title section-title has-text-centered dark-text text-bold">
            Konfirmasi Pembayaran
        </h2>
    </div>

    <div class="columns is-vcentered">
        <div class="column is-4 is-offset-4">
            <div class="info-block has-text-centered">
                <i>Konfirmasi Pembayaran Anda.</i>
            </div>
        </div>
    </div>

    <!-- 2 columns -->
    <div class="columns">
        <div class="column is-4 is-offset-2 is-flex-mobile">
            <div class="flex-card light-bordered light-raised">
                <ul class="card-body">
                    <form action="<?=base_url('Booking/kirimEmail')?>">
                        <div class="columns">
                            <div class="column">
                                <div class="control">
                                <h2 class="title is-5 text-bold mb-20">Kode Pemesanan</h2>
                                    <div class="columns">
                                        <div class="column">
                                            <div class="control">
                                                <h2 class="title is-5 mb-20">1568604755</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="columns">
                            <div class="column">
                                <div class="control">
                                    <label>Nama Pengirim</label>
                                    <p style="color: #bdbdbd;">Misbahudin.</p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="control">
                                    <label>Nominal Transfer</label>
                                    <p style="color: #bdbdbd;">Rp. 1.500.000</p>
                                </div>
                            </div>         
                        </div>
                        <div class="columns">
                            <div class="column">
                                <div class="control">
                                    <label>Sudah dibayarkan ke rekening</label>
                                    <div class="select is-fullwidth">
                                        <select class="is-hovered">
                                            <option name="">Bank BCA</option>
                                            <option name="">Bank Mandiri</option>
                                            <option name="">Bank BRI</option>
                                        </select>
                                        <small style="color: #bdbdbd;">*a/n PT. Affan Utama</small>
                                    </div>
                                </div>
                            </div>    
                        </div>

                        <div class="mt-30">  
                            <button class="button btn-align no-lh raised primary-btn">Konfirmasi</button>
                            <button class="button is-link no-lh">Cancel</button>
                        </div>
                </ul>
            </div>
        </div>
        <div class="column is-3 is-flex-mobile">
            <div class="flex-card light-bordered light-raised">
                <ul class="card-body">
                    <h2 class="title is-5 text-bold mb-20">Time Limit</h2>
                    <hr>
                      <div class="column is-10 is-offset-3">
                         <h2 class="timer is-4" data-minutes-left="180"></h2>
                      </div>
                </ul>
            </div>
        </div>
    </div>
    <!-- 2 columns -->
    </section>
</div>