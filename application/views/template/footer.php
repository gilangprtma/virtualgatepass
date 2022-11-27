    <!--
    Essential Scripts
    =====================================-->
    <script src="<?= base_url('assets_user/plugins/jquery/jquery.js'); ?>"></script>
    <script src="<?= base_url('assets_user/plugins/bootstrap/bootstrap.min.js'); ?>"></script>
    <script src="<?= base_url('assets_user/plugins/slick-carousel/slick/slick.min.js'); ?>"></script>
    <script src="<?= base_url('assets_user/plugins/shuffle/shuffle.min.js'); ?>"></script>

    <!-- CDN example (jsDelivr) -->
    <script src="https://cdn.jsdelivr.net/npm/dayjs@1/dayjs.min.js"></script>

    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA"></script>
    <script src="<?= base_url('assets_user/plugins/google-map/gmap.js'); ?>"></script>

    <script src="<?= base_url('assets_user/js/script.js">'); ?>"></script>

    <style>
      .color-approved {
        color: chartreuse;
      }
      .color-pending {
        color: red;
      }
    </style>

    <script>
      $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
      });

      const formatDate = (date, format) => {
        return dayjs(date).format(format)
      }

      // modal
      $('#box-surat-modal').on('shown.bs.modal', function() {
        $('#tracking').trigger('focus');
      });

      const setView = (id) => {
        $('#form-search').hide();
        $('#data-view').hide();
        $('#loading-view').hide();
        $('#not-found-view').hide();

        $(`#${id}`).show();
      }

      $('#box-surat-modal').on('show.bs.modal', function() {
        // set to display
        setView('form-search')
      })

      $('#form-search').on('submit', async function(e) {
        e.preventDefault();

        // do request 
        const noSurat = $('#tracking').val();
        if (noSurat == '') {
          return
        }

        setView('loading-view')

        try {
          const url = $(this).attr('action')
          const res = await fetch(`${url}?no=${noSurat}`)
          const json = await res.json()

          if (!json.success) {
            setView('not-found-view')
            return
          }

          console.log(json.data)

          const resHTML = `
          <div class="timeline-step">
              <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2003">
                  <div class="inner-circle"></div>
                  <p class="h6 mt-3 mb-1">HSSE</p>
                  <p class="h6 mb-0 mb-lg-0 ${json.data.approve_hsse !== null ? 'color-approved' : 'color-pending'}">${json.data.approve_hsse !== null ? 'Approve' : 'Belum Approve'}</p>
                  <p class="h6 mb-0 mb-lg-0">${json.data.approve_hsse !== null ? formatDate(json.data.approve_hsse, 'DD MMM YYYY') : '-'}</p>
              </div>
          </div>
          <div class="timeline-step">
              <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2004">
                  <div class="inner-circle"></div>
                  <p class="h6 mt-3 mb-1">MPS</p>
                  <p class="h6 mb-0 mb-lg-0 ${json.data.approve_mps !== null ? 'color-approved' : 'color-pending'}">${json.data.approve_mps !== null ? 'Approve' : 'Belum Approve'}</p>
                  <p class="h6 mb-0 mb-lg-0">${json.data.approve_mps !== null ? formatDate(json.data.approve_mps, 'DD MMM YYYY') : '-'}</p>
              </div>
          </div>
          <div class="timeline-step">
              <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2005">
                  <div class="inner-circle"></div>
                  <p class="h6 mt-3 mb-1">FTM</p>
                  <p class="h6 mb-0 mb-lg-0 ${json.data.approve_ftm !== null ? 'color-approved' : 'color-pending'}">${json.data.approve_ftm !== null ? 'Approve' : 'Belum Approve'}</p>
                  <p class="h6 mb-0 mb-lg-0">${json.data.approve_ftm !== null ? formatDate(json.data.approve_ftm, 'DD MMM YYYY') : '-'}</p>
              </div>
          </div>
          `
          $('#timeline-data').html(resHTML)

          setView('data-view')
        } catch (error) {
          console.error(error)
          setView('not-found-view')
        }
      });
    </script>

    </body>

    </html>