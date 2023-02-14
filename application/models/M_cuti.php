<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_cuti extends CI_Model
{
  public function tampil_data($id = null)
  {
    $this->db->from('cuti');
    if ($id != null) {
      $query = $this->db->where('id', $id);
    }
    $query =  $this->db->order_by('id', 'DESC')->get();
    return $query;
  }
  public function cuti_divisi()
  {
    $id = $this->session->userdata('id');
    $divisi = $this->session->userdata('divisi');
    if ($id == 115) {
      //yuli
      $this->db->where('nama_id', 20); //dita
      $this->db->or_where('nama_id', 21); //triana
      $this->db->or_where('nama_id', 49); //metah
      $this->db->or_where('nama_id', 108); //grace 
      $this->db->or_where('nama_id', 117); //harun 
      $this->db->or_where('nama_id', 105); //rizky
      return $this->db->order_by('id', 'Desc')->get('cuti');
    } elseif ($id == 105) {
      //rizky
      $this->db->where('nama_id', 17); //jacky
      $this->db->or_where('nama_id', 19); //angga
      $this->db->or_where('nama_id', 27); //ilvan
      $this->db->or_where('nama_id', 50); //manda
      $this->db->or_where('nama_id', 54); //rivaldi
      $this->db->or_where('nama_id', 11); //alfons
      return $this->db->order_by('id', 'Desc')->get('cuti');
    } elseif ($id == 31) {
      //tia
      $this->db->where('nama_id', 20); //dita
      $this->db->or_where('nama_id', 21); //triana
      $this->db->or_where('nama_id', 49); //metah
      $this->db->or_where('nama_id', 108); //grace 
      $this->db->or_where('nama_id', 117); //harun 
      $this->db->or_where('nama_id', 105); //rizky
      return $this->db->order_by('id', 'Desc')->get('cuti');
    } elseif ($id == 2) {
      //bunga
      $this->db->where('nama_id', 31); //tia
      $this->db->or_where('nama_id', 2); //bunga
      return $this->db->order_by('id', 'Desc')->get('cuti');
    } elseif ($id == 32) {
      //inggrid
      $this->db->where('nama_id', 35); //sigit
      $this->db->or_where('nama_id', 32); //inggrid
      $this->db->or_where('nama_id', 7); //meilisa
      $this->db->or_where('nama_id', 121); //aldi
      $this->db->where('nama_id', 1); //lasmidi
      $this->db->or_where('nama_id', 6); //gustian
      $this->db->or_where('nama_id', 28); //yogi
      $this->db->or_where('nama_id', 37); //uus
      $this->db->or_where('nama_id', 39); //urbanus
      $this->db->or_where('nama_id', 48); //surya
      $this->db->or_where('nama_id', 51); //yudi
      $this->db->or_where('nama_id', 52); //vina
      $this->db->or_where('nama_id', 55); //shinta
      $this->db->or_where('nama_id', 119); //aji
      $this->db->where('nama_id', 9); //aceng
      $this->db->or_where('nama_id', 12); //nyoto
      $this->db->or_where('nama_id', 29); //darkim
      $this->db->or_where('nama_id', 38); //pandi
      $this->db->or_where('nama_id', 42); //heri
      $this->db->or_where('nama_id', 107); //riyanto
      $this->db->or_where('nama_id', 109); //nana
      $this->db->or_where('nama_id', 110); //rusmanto
      $this->db->or_where('nama_id', 113); //ahmad nur
      $this->db->or_where('nama_id', 116); //bayu riyanto
      $this->db->or_where('nama_id', 53); //ridhan
      $this->db->or_where('nama_id', 46); //rony
      return $this->db->order_by('id', 'Desc')->get('cuti');
    } elseif ($id == 7) {
      //meilissa
      $this->db->where('nama_id', 4); //toto
      $this->db->or_where('nama_id', 32); //inggrid
      $this->db->or_where('nama_id', 10); //amax
      $this->db->or_where('nama_id', 13); //iwan
      $this->db->or_where('nama_id', 14); //eko
      $this->db->or_where('nama_id', 15); //huda
      $this->db->or_where('nama_id', 24); //sabri
      $this->db->or_where('nama_id', 30); //albert
      $this->db->or_where('nama_id', 34); //risman
      $this->db->or_where('nama_id', 34); //risman
      $this->db->or_where('nama_id', 41); //alex
      $this->db->or_where('nama_id', 43); //gibran
      $this->db->or_where('nama_id', 45); //dony
      return $this->db->order_by('id', 'Desc')->get('cuti');
    } elseif ($id == 35) {
      return $this->db->order_by('id', 'DESC')->get('cuti');
    } else {
      $this->db->or_where('nama_id', 0); //dony
      return $this->db->order_by('id', 'Desc')->get('cuti');
    }
  }
  public function cuti_head()
  {
    $this->db->where('status', 2);
    return $this->db->order_by('id', 'DESC')->get('cuti');
  }
  public function getjenis_cuti()
  {
    return $this->db->get('jenis_cuti');
  }
  public function del($id)
  {
    $this->db->where('id', $id);
    return $this->db->delete('cuti');
  }

  public function edit_cuti($post)
  {
    if ($this->input->post('value', true) == 1) {
      $id = $this->input->post('id', true);
      $awal =  htmlspecialchars($this->input->post('date_creted', true));
      $akhir = htmlspecialchars($this->input->post('date_end', true));
      $id_nama = htmlspecialchars($this->input->post('nama_id', true));
      $begin = new DateTime($awal);
      $end = new DateTime($akhir);

      $daterange     = new DatePeriod($begin, new DateInterval('P1D'), $end);
      //mendapatkan range antara dua tanggal dan di looping
      $i = 0;
      $x     =    0;
      $end     =    1;

      foreach ($daterange as $date) {
        $daterange     = $date->format("Y-m-d");
        $datetime     = DateTime::createFromFormat('Y-m-d', $daterange);

        //Convert tanggal untuk mendapatkan nama hari
        $day         = $datetime->format('D');

        //Check untuk menghitung yang bukan hari sabtu dan minggu
        if ($day != "Sun" && $day != "Sat") {
          //echo $i;
          $x    +=    $end - $i;
        }
        $end++;
        $i++;
      }
      $data = [
        'date_created_head' => htmlspecialchars($this->input->post('date_created', true)),
        'tanggal_acc_head' => htmlspecialchars($this->input->post('tanggal_acc_head', true)),
        'date_acc_head' => htmlspecialchars($this->input->post('date_acc_head', true)),
        'status1' => htmlspecialchars($this->input->post('status', true)),
        'note' => htmlspecialchars($this->input->post('catatan', true)),
        'head' => htmlspecialchars($this->input->post('head', true)),
        'durasi' => $x + 1
      ];
      $this->db->where('id', $id);
      $this->db->update('cuti', $data);
      // $this->_sendEmailHead($post, $id_nama);
    } else {
      $id = $this->input->post('id', true);
      $id_nama = $this->input->post('nama_id', true);
      $awal =  htmlspecialchars($this->input->post('date_creted', true));
      $akhir = htmlspecialchars($this->input->post('date_end', true));

      $begin = new DateTime($awal);
      $end = new DateTime($akhir);

      $daterange     = new DatePeriod($begin, new DateInterval('P1D'), $end);
      //mendapatkan range antara dua tanggal dan di looping
      $i = 0;
      $x     =    0;
      $end     =    1;

      foreach ($daterange as $date) {
        $daterange     = $date->format("Y-m-d");
        $datetime     = DateTime::createFromFormat('Y-m-d', $daterange);

        //Convert tanggal untuk mendapatkan nama hari
        $day         = $datetime->format('D');

        //Check untuk menghitung yang bukan hari sabtu dan minggu
        if ($day != "Sun" && $day != "Sat") {
          //echo $i;
          $x    +=    $end - $i;
        }
        $end++;
        $i++;
      }
      $data = [
        'date_created_hr' => htmlspecialchars($this->input->post('date_created', true)),
        'tanggal_acc_hr' => htmlspecialchars($this->input->post('tanggal_acc_hr', true)),
        'date_acc_hr' => htmlspecialchars($this->input->post('sampai_tanggal', true)),
        'status' => htmlspecialchars($this->input->post('status', true)),
        'catatan_hr' => htmlspecialchars($this->input->post('catatan', true)),
        'mengetahui' => htmlspecialchars($this->input->post('hr', true)),
        'durasi' => $x + 1
      ];
      $this->db->where('id', $id);
      $this->db->update('cuti', $data);
      // $this->_sendEmailHR($post, $id_nama);
    }
  }
  public function edit_acc($post)
  {
    $id = htmlspecialchars($this->input->post('id', true));
    $id_nama = htmlspecialchars($this->input->post('nama_id', true));
    $awal =  htmlspecialchars($this->input->post('date_creted', true));
    $akhir = htmlspecialchars($this->input->post('date_end', true));

    $begin = new DateTime($awal);
    $end = new DateTime($akhir);

    $daterange     = new DatePeriod($begin, new DateInterval('P1D'), $end);
    //mendapatkan range antara dua tanggal dan di looping
    $i = 0;
    $x     =    0;
    $end     =    1;

    foreach ($daterange as $date) {
      $daterange     = $date->format("Y-m-d");
      $datetime     = DateTime::createFromFormat('Y-m-d', $daterange);

      //Convert tanggal untuk mendapatkan nama hari
      $day         = $datetime->format('D');

      //Check untuk menghitung yang bukan hari sabtu dan minggu
      if ($day != "Sun" && $day != "Sat") {
        //echo $i;
        $x    +=    $end - $i;
      }
      $end++;
      $i++;
    }
    $data = [
      'date_created_hr' => htmlspecialchars($this->input->post('date_created', true)),
      'tanggal_acc_hr' => htmlspecialchars($this->input->post('tanggal_acc_hr', true)),
      'date_acc_hr' => htmlspecialchars($this->input->post('sampai_tanggal', true)),
      'status' => htmlspecialchars($this->input->post('status', true)),
      'note' => htmlspecialchars($this->input->post('catatan', true)),
      'mengetahui' => htmlspecialchars($this->input->post('hr', true)),
      'durasi' => $x + 1
    ];
    $this->db->where('id', $id);
    $this->db->update('cuti', $data);
    // $this->_send_email($post, $id_nama);
  }
  public function tambah_cuti($post)
  {
    $awal =  htmlspecialchars($this->input->post('tanggal', true));
    $akhir = htmlspecialchars($this->input->post('date_end', true));
    $id = htmlspecialchars($this->input->post('nama_id', true));

    $begin = new DateTime($awal);
    $end = new DateTime($akhir);

    $daterange     = new DatePeriod($begin, new DateInterval('P1D'), $end);
    //mendapatkan range antara dua tanggal dan di looping
    $i = 0;
    $x     =    0;
    $end     =    1;

    foreach ($daterange as $date) {
      $daterange     = $date->format("Y-m-d");
      $datetime     = DateTime::createFromFormat('Y-m-d', $daterange);

      //Convert tanggal untuk mendapatkan nama hari
      $day         = $datetime->format('D');

      //Check untuk menghitung yang bukan hari sabtu dan minggu
      if ($day != "Sun" && $day != "Sat") {
        //echo $i;
        $x    +=    $end - $i;
      }
      $end++;
      $i++;
    }
    $data = [
      'nama_id' => htmlspecialchars($this->input->post('nama_id', true)),
      'kategori_cuti' => htmlspecialchars($this->input->post('jenis_cuti', true)),
      'tanggal' => htmlspecialchars($this->input->post('tanggal', true)),
      'date_end' => htmlspecialchars($this->input->post('date_end', true)),
      'tanggal_acc_hr' => htmlspecialchars($this->input->post('tanggal', true)),
      'date_acc_hr' => htmlspecialchars($this->input->post('date_end', true)),
      'tanggal_acc_head' => htmlspecialchars($this->input->post('tanggal', true)),
      'date_acc_head' => htmlspecialchars($this->input->post('date_end', true)),
      'keterangan' => htmlspecialchars($this->input->post('keterangan', true)),
      'date_created' => htmlspecialchars($this->input->post('date_created', true)),
      'kuota_cuti' => htmlspecialchars($this->input->post('kuota', true)),
      'durasi' => $x + 1,
      'status' => 1,
      'status1' => 1
    ];
    $this->db->insert('cuti', $data);
    // $this->_send_email($post, $id);
  }

  public function kurangi_kuota($post)
  {
    $id = htmlspecialchars($this->input->post('nama_id'));
    $kuota = htmlspecialchars($this->input->post('kuota'));
    $durasi = htmlspecialchars($this->input->post('durasi'));

    $data = [
      'kuota_cuti' => $kuota - $durasi,
    ];
    $this->db->where('id', $id);
    $this->db->update('karyawan', $data);
  }


  public function cuti()
  {
    $this->db->count_all_results('cuti');  // Produces an integer, like 25
    $this->db->where('tanggal', date('Y-m-d'));
    $this->db->from('cuti');
    $query = $this->db->count_all_results();
    return $query;
  }
  public function Total_cuti()
  {
    $this->db->count_all_results('cuti');  // Produces an integer, like 25
    $this->db->where('tanggal', date('Y-m-d'));
    $this->db->from('cuti');
    $query = $this->db->count_all_results();
    return $query;
  }
  public function Total_cuti_person()
  {
    $id = $this->session->userdata('id');
    $this->db->count_all_results('cuti');  // Produces an integer, like 25
    $this->db->where('nama_id', $id);
    $this->db->from('cuti');
    $query = $this->db->count_all_results();
    return $query;
  }
  public function hasil()
  {
    $id = $this->session->userdata('id');
    $sql = $this->db->get_where('karyawan', ['id' => $id])->result_array();

    foreach ($sql as $k) {
      $kuota = $k['kuota_cuti'];
    }
    $okok = 12 - $kuota;
    $hasil = $okok / 12;
    $persen = $hasil * 100;

    return $persen;
  }
  public function _send_email($post)
  {
    //Email dari User ke Head

    $judul = "Pengajuan Cuti";
    $awal =  htmlspecialchars($this->input->post('tanggal', true));
    $akhir = htmlspecialchars($this->input->post('date_end', true));
    $id = htmlspecialchars($this->input->post('nama_id', true));
    $keterangan = htmlspecialchars($this->input->post('keterangan', true));
    $date_created = htmlspecialchars($this->input->post('date_created', true));

    if ($awal == $akhir) {
      $hasil = date('d M Y', strtotime($awal)) . '</b>';
    } elseif (date(' M', strtotime($awal)) == date(' M', strtotime($akhir))) {
      $hasil = date('d', strtotime($awal)) . "-" . date('d M Y', strtotime($akhir)) . '</b>';
    } else {
      $hasil = date('d M', strtotime($awal)) . "-" . date('d M Y', strtotime($akhir)) . '</b>';
    }

    if ($this->input->post('status', true) == 1) {
      $status = "Menunggu ACC HEAD";
    } elseif ($this->input->post('status') == 2) {
      $status = "Disetujui";
    } else {
      $status = "Dibatalkan";
    };
    $this->db->where('id', $id);
    $query = $this->db->get('karyawan')->result_array();

    foreach ($query as $d) :

      $this->db->where('id', $d['divisi']);
      $divisi = $this->db->get('devisi')->result_array();

      foreach ($divisi as $div) :

        $config = array();
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.googlemail.com';
        $config['smtp_user'] = 'peminjamangmi@gmail.com';
        $config['smtp_pass'] = 'lgtnfywhiaythuio';
        $config['smtp_port'] = 465;
        $config['mailtype'] = 'html';
        $config['charset'] = 'utf-8';
        $this->email->set_newline("\r\n");
        $this->email->initialize($config);

        //librari email di ci
        $this->email->initialize($config);
        $this->load->library('email', $config);
        // $this->email->attach('assets/img/logo/gmi logo.png');
        //mengatur email dikirim dari siapa
        $this->email->from('hr@cha-man.com', 'Cha-Man');

        //kirim kemana
        // $this->email->to($div['email_head']);
        $this->email->to('ssprasetyo08@gmail.com');
        $this->email->cc('ssprasetyo08@gmail.com');
        $this->email->message('
        <!DOCTYPE html>
        <html lang="en" xmlns="" xmlns:o="">
        <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width,initial-scale=1">
          <meta name="x-apple-disable-message-reformatting">
          <title></title>
         
          <style>
            table, td, div, h1, p {font-family: montserrat, sans-serif; color:#cccccc;}
            img{}
          </style>
        </head>
        <body style="margin:0;padding:0;">
          <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;background:#070606;">
            <tr>
              <td align="center" style="padding:0;">
                <table role="presentation" style="width:602px;border-collapse:collapse;border:1px solid #cccccc;border-spacing:0;text-align:left;">
                  <tr>
                    <td align="center" style="padding:40px 0 30px 0;background:#70bbd9;">
                      <img src="https://info.garudamart.com/assets/img/logo/email.png" alt="" width="300" style="height:auto;display:block;" />
                    </td>
                  </tr>
                  <tr>
                    <td style="padding:36px 30px 42px 30px;">
                      <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
                        <tr>
                            <td style="padding:0 0 36px 0;color:#153643;">
                            <h1 style="font-size:24px;margin:0 0 20px 0;font-family:Arial,sans-serif;">Pengajuan Cuti Karyawan</h1>
                            <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">Halo, <b>' . $div['head'] . '</b></p>
                            <p>Berikut ini adalah informasi pengajuan cuti yang telah dibuat oleh karyawan atas nama dibawah ini melalui website info.garudamart.com (Eform GMI)</p>
                            </td>
                        </tr>
                        <tr>
                          <td style="padding:0;">
                            <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
                              <tr>
                                <td style="width:150px;padding:0;vertical-align:top;color:#153643;">
                                  <p style="margin:0 0 25px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;"> <img src="https://info.garudamart.com/assets/img/profile/' . $d['foto'] . '" alt="user" style="width: 130px; height: auto; border-radius: 100%;"></p>
                                  </td>
                                <td style="width:20px;padding:0;font-size:0;line-height:0;">&nbsp;</td>
                                <td style="width:300px;padding:0;vertical-align:top;color:#153643;">
                                  <p style="margin:0 0 25px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;color: yellow;"><b> Detail Pengajuan</b></p>
                                  <table>
                                    <tr>
                                      <td>Nama</td>
                                      <td>&emsp;: </td>
                                      <td>' . $d['nama'] . '</td>
                                  </tr>
                                  <tr>
                                      <td>Departemen</td>
                                      <td>&emsp;: </td>
                                      <td>' . $div['nama_divisi'] . '</td>
                                  </tr>
                                    <tr>
                                        <td>Tanggal Pengajuan</td>
                                        <td>&emsp;: </td>
                                        <td>' . $date_created . '</td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Cuti</td>
                                        <td>&emsp;: </td>
                                        <td>' . $hasil . '</td>
                                    </tr>
                                    <tr>
                                        <td>Keterangan</td>
                                        <td>&emsp;: </td>
                                        <td>' . $keterangan . '</td>
                                    </tr>
                                    <tr>
                                        <td>Status</td>
                                        <td>&emsp;: </td>
                                        <td style="color:rgb(201, 3, 3) ;"><b>' . $status . '</b></td>
                                    </tr>
                                  </table>
                                </td>
                              </tr>
                            </table>
                          </td>
                          <tr>
                    <td style="padding-top: 30px;">
                      <a href="https://info.garudamart.com/"><button  style="width: 100%; height:30px; align:center;">Buka Web Eform GMI</button></a>
                    </td>
                  </tr>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td style="padding:30px;background:#70bbd9;">
                      <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;font-size:9px;font-family:Arial,sans-serif;">
                        <tr style="font-size: 10px;" align="left">
                          <p style="color: #000; font-size: 15px;">Semoga informasi ini dapat bermanfaat bagi Anda. Untuk dapat memberikan tanggapan, silahkan dapat membuka website info.garudamart.com.</p>
                          <p style="color: #000; font-size: 15px;">Hormat kami<br><b><i>PT. Garuda Mart Indonesia | SP</i></b></p>
                          <p style="color: #000;font-size: 15px;">Email ini dikirimkan secara otomatis mohon untuk tidak membalas email ini. <br>Terima kasih. </p>
                        </tr>
                        <tr>
                          <td style="padding:0;width:50%;" align="left">
                            <p style="margin:0;font-size:14px;line-height:16px;font-family:Arial,sans-serif;color:#ffffff;">
                              <a href="http://info.garudamart.com" style="color:#ffffff;text-decoration:underline;">&reg; Info Garuda Mart Indonesia | Prasetyo<br/></a>
                            </p>
                          </td>
                          <td style="padding:0;width:50%;" align="right">
                            <table role="presentation" style="border-collapse:collapse;border:0;border-spacing:0;">
                              <tr>
                                <td style="padding:0 0 0 10px;width:38px;">
                                  <a href="http://www.garudamart.com/" style="color:#ffffff;"><img src="https://info.garudamart.com/assets/images/logo_sm.png" alt="Twitter" width="38" style="height:auto;display:block;border:0;" /></a>
                                </td>
                                <!-- <td style="padding:0 0 0 10px;width:38px;">
                                  <a href="http://www.facebook.com/" style="color:#ffffff;"><img src="https://assets.codepen.io/210284/fb_1.png" alt="Facebook" width="38" style="height:auto;display:block;border:0;" /></a>
                                </td> -->
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
        </body>
        </html>
      ');
        $this->email->subject($judul . ' - ' . $d['nama']);
        if ($this->email->send()) {
          return true;
        } else {
          echo $this->email->print_debugger();
          die;
        }
      endforeach;
    endforeach;
  }
  public function _sendEmailHR($post)
  {
    //email dari Hr ke user
    $judul = "Pengajuan- Cuti";
    $awal =  htmlspecialchars($this->input->post('tanggal_acc_hr', true));
    $akhir = htmlspecialchars($this->input->post('sampai_tanggal', true));
    $id = htmlspecialchars($this->input->post('nama_id', true));
    $idcuti = htmlspecialchars($this->input->post('id', true));
    $keterangan = htmlspecialchars($this->input->post('keterangan', true));
    $catatan = htmlspecialchars($this->input->post('catatan', true));
    $date_created_hr = htmlspecialchars($this->input->post('date_created', true));
    $hr = htmlspecialchars($this->input->post('hr', true));

    if ($awal == $akhir) {
      $hasil = date('d M Y', strtotime($awal)) . '</b>';
    } elseif (date(' M', strtotime($awal)) == date(' M', strtotime($akhir))) {
      $hasil = date('d', strtotime($awal)) . "-" . date('d M Y', strtotime($akhir)) . '</b>';
    } else {
      $hasil = date('d M', strtotime($awal)) . "-" . date('d M Y', strtotime($akhir)) . '</b>';
    }

    if ($this->input->post('status', true) == 1) {
      $status = "Menunggu ACC HEAD";
    } elseif ($this->input->post('status') == 2) {
      $status = "Disetujui";
    } else {
      $status = "Dibatalkan";
    };

    $this->db->where('id', $idcuti);
    $datacuti = $this->db->get('cuti')->result_array();
    //nama HR
    $this->db->select('nama');
    $this->db->where('id', $hr);
    $nama_hr = $this->db->get('karyawan')->result_array();
    foreach ($datacuti as $dt) :
      if ($dt['tanggal'] == $dt['date_end']) {
        $tanggal_pengajuan_awal = date('d M Y', strtotime($dt['tanggal'])) . '</b>';
      } elseif (date(' M', strtotime($dt['tanggal'])) == date(' M', strtotime($dt['date_end']))) {
        $tanggal_pengajuan_awal = date('d', strtotime($dt['tanggal'])) . "-" . date('d M Y', strtotime($dt['date_end'])) . '</b>';
      } else {
        $tanggal_pengajuan_awal = date('d M', strtotime($dt['tanggal'])) . "-" . date('d M Y', strtotime($dt['date_end'])) . '</b>';
      }

      // $this->db->where('id', $idcuti);
      // $datacuti = $this->db->get('cuti')->result_array();
      // foreach ($datacuti as $datacutihead) {
      if ($dt['tanggal_acc_head'] == $dt['date_acc_head']) {
        $tanggal_acc_head = date('d M Y', strtotime($dt['tanggal_acc_head'])) . '</b>';
      } elseif (date(' M', strtotime($dt['tanggal_acc_head'])) == date(' M', strtotime($dt['date_acc_head']))) {
        $tanggal_acc_head = date('d', strtotime($dt['tanggal_acc_head'])) . "-" . date('d M Y', strtotime($dt['date_acc_head'])) . '</b>';
      } else {
        $tanggal_acc_head = date('d M', strtotime($dt['tanggal_acc_head'])) . "-" . date('d M Y', strtotime($dt['date_acc_head'])) . '</b>';
      }
      // }

      $this->db->where('id', $id);
      $query = $this->db->get('karyawan')->result_array();

      foreach ($query as $d) :

        $this->db->where('id', $d['divisi']);
        $divisi = $this->db->get('devisi')->result_array();

        foreach ($divisi as $div) :
          foreach ($nama_hr as $hr_nama) :

            $config = array();
            $config['protocol'] = 'smtp';
            $config['smtp_host'] = 'ssl://smtp.googlemail.com';
            $config['smtp_user'] = 'peminjamangmi@gmail.com';
            $config['smtp_pass'] = 'lgtnfywhiaythuio';
            $config['smtp_port'] = 465;
            $config['mailtype'] = 'html';
            $config['charset'] = 'utf-8';
            $this->email->set_newline("\r\n");
            $this->email->initialize($config);

            //librari email di ci
            $this->email->initialize($config);
            $this->load->library('email', $config);
            // $this->email->attach('assets/img/logo/gmi logo.png');
            //mengatur email dikirim dari siapa
            $this->email->from('peminjaman@garudamart.com', 'Eform GMI');

            //kirim kemana
            $this->email->to($div['email_head']);
            // $this->email->to($d['email']);
            // $this->email->to('ssprasetyo08@gmail.com');
            $this->email->cc('sigit@garudamart.com');
            $this->email->message('
        <!DOCTYPE html>
        <html lang="en" xmlns="" xmlns:o="">
        <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width,initial-scale=1">
          <meta name="x-apple-disable-message-reformatting">
          <title></title>
         
          <style>
            table, td, div, h1, p {font-family: montserrat, sans-serif; color:#cccccc; font: size 12px;}
            img{}
          </style>
        </head>
        <body style="margin:0;padding:0;">
          <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;background:#070606;">
            <tr>
              <td align="center" style="padding:0;">
                <table role="presentation" style="width:602px;border-collapse:collapse;border:1px solid #cccccc;border-spacing:0;text-align:left;">
                  <tr>
                    <td align="center" style="padding:40px 0 30px 0;background:#70bbd9;">
                      <img src="https://info.garudamart.com/assets/img/logo/email.png" alt="" width="300" style="height:auto;display:block;" />
                    </td>
                  </tr>
                  <tr>
                    <td style="padding:36px 30px 42px 30px;">
                      <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
                        <tr>
                            <td style="padding:0 0 36px 0;color:#153643;">
                            <h1 style="font-size:24px;margin:0 0 20px 0;font-family:Arial,sans-serif;">Pengajuan Cuti Karyawan</h1>
                            <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">Halo, <b>' . $d['nama'] . '</b></p>
                            <p>Pengajuan cuti Anda disetujui pada tanggal <br><b style="font-size: 30px; text-align: center;">"' . $hasil . '"</b></p>
                            <p>Berikut ini adalah informasi pengajuan cuti yang anda telah dibuat melalui website info.garudamart.com (Eform GMI)</p>
                            </td>
                        </tr>
                        <tr>
                          <td style="padding:0;">
                            <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
                              <tr>
                                <td style="width:150px;padding:0;vertical-align:top;color:#153643;">
                                  <p style="margin:0 0 25px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;"> <img src="https://info.garudamart.com/assets/img/profile/' . $d['foto'] . '" alt="user" style="width: 130px; height: auto; border-radius: 100%;"></p>
                                  </td>
                                <td style="width:20px;padding:0;font-size:0;line-height:0;">&nbsp;</td>
                                <td style="width:300px;padding:0;vertical-align:top;color:#153643;">
                                  <p style="margin:0 0 25px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;color: yellow;"><b> Detail Pengajuan</b></p>
                                  <table>
                                    <tr>
                                      <td>Nama</td>
                                      <td>&emsp;: </td>
                                      <td>' . $d['nama'] . '</td>
                                  </tr>
                                  <tr>
                                      <td>Departemen</td>
                                      <td>&emsp;: </td>
                                      <td>' . $div['nama_divisi'] . '</td>
                                  </tr>
                                    <tr>
                                        <td>Diajukan pada</td>
                                        <td>&emsp;: </td>
                                        <td>' . $dt['date_created'] . '</td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Pengajuan Cuti</td>
                                        <td>&emsp;: </td>
                                        <td>' . $tanggal_pengajuan_awal . '</td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Disetujui Head</td>
                                        <td>&emsp;: </td>
                                        <td>' . $tanggal_acc_head . '</td>
                                    </tr>
                                    <tr>
                                        <td>Disetujui pada(Head)</td>
                                        <td>&emsp;: </td>
                                        <td>' . $dt['date_created_head'] . '</td>
                                    </tr>
                                    <tr>
                                        <td>Catatan Head</td>
                                        <td>&emsp;: </td>
                                        <td>' . $dt['note'] . '</td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Disetujui HRD</td>
                                        <td>&emsp;: </td>
                                        <td>' . $hasil . '</td>
                                    </tr>
                                    <tr>
                                        <td>Disetujui pada(HRD)</td>
                                        <td>&emsp;: </td>
                                        <td>' . $date_created_hr . '</td>
                                    </tr>
                                    <tr>
                                        <td>Catatan HRD</td>
                                        <td>&emsp;: </td>
                                        <td>' . $catatan . '</td>
                                    </tr>
                                    <tr>
                                        <td>Keterangan</td>
                                        <td>&emsp;: </td>
                                        <td>' . $keterangan . '</td>
                                    </tr>
                                    <tr>
                                        <td>Status</td>
                                        <td>&emsp;: </td>
                                        <td style="color:rgb(201, 3, 3) ;"><b>' . $status . '</b> ' . ' - ' . $hr_nama['nama'] . '</td>
                                    </tr>
                                  </table>
                                </td>
                              </tr>
                            </table>
                          </td>
                          <tr>
                    <td style="padding-top: 30px;">
                      <a href="https://info.garudamart.com/"><button  style="width: 100%; height:30px; align:center;">Buka Web Eform GMI</button></a>
                    </td>
                  </tr>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td style="padding:30px;background:#70bbd9;">
                      <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;font-size:9px;font-family:Arial,sans-serif;">
                        <tr style="font-size: 10px;" align="left">
                          <p style="color: #000; font-size: 15px;">Semoga informasi ini dapat bermanfaat bagi Anda. Untuk dapat memberikan tanggapan, silahkan dapat membuka website info.garudamart.com.</p>
                          <p style="color: #000; font-size: 15px;">Hormat kami<br><b><i>PT. Garuda Mart Indonesia | SP</i></b></p>
                          <p style="color: #000;font-size: 15px;">Email ini dikirimkan secara otomatis mohon untuk tidak membalas email ini. <br>Terima kasih. </p>
                        </tr>
                        <tr>
                          <td style="padding:0;width:50%;" align="left">
                            <p style="margin:0;font-size:14px;line-height:16px;font-family:Arial,sans-serif;color:#ffffff;">
                              <a href="http://info.garudamart.com" style="color:#ffffff;text-decoration:underline;">&reg; Info Garuda Mart Indonesia | Prasetyo<br/></a>
                            </p>
                          </td>
                          <td style="padding:0;width:50%;" align="right">
                            <table role="presentation" style="border-collapse:collapse;border:0;border-spacing:0;">
                              <tr>
                                <td style="padding:0 0 0 10px;width:38px;">
                                  <a href="http://www.garudamart.com/" style="color:#ffffff;"><img src="https://info.garudamart.com/assets/images/logo_sm.png" alt="Twitter" width="38" style="height:auto;display:block;border:0;" /></a>
                                </td>
                                <!-- <td style="padding:0 0 0 10px;width:38px;">
                                  <a href="http://www.facebook.com/" style="color:#ffffff;"><img src="https://assets.codepen.io/210284/fb_1.png" alt="Facebook" width="38" style="height:auto;display:block;border:0;" /></a>
                                </td> -->
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
        </body>
        </html>
      ');
            $this->email->subject($judul . ' - ' . $status);
            if ($this->email->send()) {
              return true;
            } else {
              echo $this->email->print_debugger();
              die;
            }
          endforeach;
        endforeach;
      endforeach;
    endforeach;
  }
  public function _sendEmailHead($post)
  {
    //Email dari Head ke HR
    $judul = "Pengajuan Cuti";
    $awal =  htmlspecialchars($this->input->post('tanggal_acc_head', true));
    $akhir = htmlspecialchars($this->input->post('date_acc_head', true));
    $id = htmlspecialchars($this->input->post('nama_id', true));
    $idcuti = htmlspecialchars($this->input->post('id', true));
    $keterangan = htmlspecialchars($this->input->post('keterangan', true));
    $catatan = htmlspecialchars($this->input->post('catatan', true));
    $tanggal_persetujuan_head = htmlspecialchars($this->input->post('date_created', true));
    $head = htmlspecialchars($this->input->post('head', true));

    if ($awal == $akhir) {
      $hasil = date('d M Y', strtotime($awal)) . '</b>';
    } elseif (date(' M', strtotime($awal)) == date(' M', strtotime($akhir))) {
      $hasil = date('d', strtotime($awal)) . "-" . date('d M Y', strtotime($akhir)) . '</b>';
    } else {
      $hasil = date('d M', strtotime($awal)) . "-" . date('d M Y', strtotime($akhir)) . '</b>';
    }

    if ($this->input->post('status', true) == 1) {
      $status = "Menunggu ACC HEAD";
    } elseif ($this->input->post('status') == 2) {
      $status = "Disetujui";
    } else {
      $status = "Dibatalkan";
    };

    $this->db->where('id', $idcuti);
    $datacuti = $this->db->get('cuti')->result_array();
    foreach ($datacuti as $dt) {
      if ($dt['tanggal'] == $dt['date_end']) {
        $approve = date('d M Y', strtotime($dt['tanggal'])) . '</b>';
      } elseif (date(' M', strtotime($dt['tanggal'])) == date(' M', strtotime($dt['date_end']))) {
        $approve = date('d', strtotime($dt['tanggal'])) . "-" . date('d M Y', strtotime($dt['date_end'])) . '</b>';
      } else {
        $approve = date('d M', strtotime($dt['tanggal'])) . "-" . date('d M Y', strtotime($dt['date_end'])) . '</b>';
      }
    }

    $this->db->where('id', $id);
    $query = $this->db->get('karyawan')->result_array();
    //nama head
    $this->db->select('nama');
    $this->db->where('id', $head);
    $nama_head = $this->db->get('karyawan')->result_array();

    foreach ($query as $d) :

      $this->db->where('id', $d['divisi']);
      $divisi = $this->db->get('devisi')->result_array();

      $this->db->where('id', 23);
      $datahrd = $this->db->get('devisi')->result_array();


      foreach ($divisi as $div) :
        foreach ($datahrd as $h) :
          foreach ($nama_head as $nh) :

            $config = array();
            $config['protocol'] = 'smtp';
            $config['smtp_host'] = 'ssl://smtp.googlemail.com';
            $config['smtp_user'] = 'peminjamangmi@gmail.com';
            $config['smtp_pass'] = 'lgtnfywhiaythuio';
            $config['smtp_port'] = 465;
            $config['mailtype'] = 'html';
            $config['charset'] = 'utf-8';
            $this->email->set_newline("\r\n");
            $this->email->initialize($config);

            //librari email di ci
            $this->email->initialize($config);
            $this->load->library('email', $config);
            // $this->email->attach('assets/img/logo/gmi logo.png');
            //mengatur email dikirim dari siapa
            $this->email->from('peminjaman@garudamart.com', 'Eform GMI');

            //kirim kemana
            $this->email->to($h['email_head']);
            // $this->email->to($d['email']);
            // $this->email->to('ssprasetyo08@gmail.com');
            $this->email->cc('ssprasetyo08@gmail.com');
            $this->email->message('
        <!DOCTYPE html>
        <html lang="en" xmlns="" xmlns:o="">
        <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width,initial-scale=1">
          <meta name="x-apple-disable-message-reformatting">
          <title></title>
         
          <style>
            table, td, div, h1, p {font-family: montserrat, sans-serif; color:#cccccc;}
            img{}
          </style>
        </head>
        <body style="margin:0;padding:0;">
          <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;background:#070606;">
            <tr>
              <td align="center" style="padding:0;">
                <table role="presentation" style="width:602px;border-collapse:collapse;border:1px solid #cccccc;border-spacing:0;text-align:left;">
                  <tr>
                    <td align="center" style="padding:40px 0 30px 0;background:#70bbd9;">
                      <img src="https://info.garudamart.com/assets/img/logo/email.png" alt="" width="300" style="height:auto;display:block;" />
                    </td>
                  </tr>
                  <tr>
                    <td style="padding:36px 30px 42px 30px;">
                      <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
                        <tr>
                            <td style="padding:0 0 36px 0;color:#153643;">
                            <h1 style="font-size:24px;margin:0 0 20px 0;font-family:Arial,sans-serif;">Pengajuan Cuti Karyawan</h1>
                            <p style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">Halo, <b>' . $h['head'] . '</b></p>
                            <p>Berikut ini adalah informasi pengajuan cuti yang telah disetujui oleh Departemen Head ' . $div['nama_divisi'] . '. dibuat oleh karyawan atas nama dibawah ini melalui website info.garudamart.com (Eform GMI)</p>
                            </td>
                        </tr>
                        <tr>
                          <td style="padding:0;">
                            <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
                              <tr>
                                <td style="width:150px;padding:0;vertical-align:top;color:#153643;">
                                  <p style="margin:0 0 25px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;"> <img src="https://info.garudamart.com/assets/img/profile/' . $d['foto'] . '" alt="user" style="width: 130px; height: auto; border-radius: 100%;"></p>
                                  </td>
                                <td style="width:20px;padding:0;font-size:0;line-height:0;">&nbsp;</td>
                                <td style="width:300px;padding:0;vertical-align:top;color:#153643;">
                                  <p style="margin:0 0 25px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;color: yellow;"><b> Detail Pengajuan</b></p>
                                  <table>
                                    <tr>
                                      <td>Nama</td>
                                      <td>&emsp;: </td>
                                      <td>' . $d['nama'] . '</td>
                                  </tr>
                                  <tr>
                                      <td>Departemen</td>
                                      <td>&emsp;: </td>
                                      <td>' . $div['nama_divisi'] . '</td>
                                  </tr>
                                    <tr>
                                        <td>Tanggal Cuti</td>
                                        <td>&emsp;: </td>
                                        <td>' . $approve . '</td>
                                    </tr>
                                    <tr>
                                        <td>Disetujui pada</td>
                                        <td>&emsp;: </td>
                                        <td>' . $tanggal_persetujuan_head . '</td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal yang disetuji</td>
                                        <td>&emsp;: </td>
                                        <td style="color:rgb(201, 3, 3) ;">' . $hasil . '</td>
                                    </tr>
                                    <tr>
                                        <td>Keterangan</td>
                                        <td>&emsp;: </td>
                                        <td>' . $keterangan . '</td>
                                    </tr>
                                    <tr>
                                        <td>Catatan</td>
                                        <td>&emsp;: </td>
                                        <td>' . $catatan . '</td>
                                    </tr>
                                    <tr>
                                        <td>Status</td>
                                        <td>&emsp;: </td>
                                        <td style="color:rgb(201, 3, 3) ;"><b>' . $status . ' - ' . $nh['nama'] . '</b></td>
                                    </tr>
                                  </table>
                                </td>
                              </tr>
                            </table>
                          </td>
                          <tr>
                    <td style="padding-top: 30px;">
                      <a href="https://info.garudamart.com/"><button  style="width: 100%; height:30px; align:center;">Buka Web Eform GMI</button></a>
                    </td>
                  </tr>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td style="padding:30px;background:#70bbd9;">
                      <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;font-size:9px;font-family:Arial,sans-serif;">
                        <tr style="font-size: 10px;" align="left">
                          <p style="color: #000; font-size: 15px;">Semoga informasi ini dapat bermanfaat bagi Anda. Untuk dapat memberikan tanggapan, silahkan dapat membuka website info.garudamart.com.</p>
                          <p style="color: #000; font-size: 15px;">Hormat kami<br><b><i>PT. Garuda Mart Indonesia | SP</i></b></p>
                          <p style="color: #000;font-size: 15px;">Email ini dikirimkan secara otomatis mohon untuk tidak membalas email ini. <br>Terima kasih. </p>
                        </tr>
                        <tr>
                          <td style="padding:0;width:50%;" align="left">
                            <p style="margin:0;font-size:14px;line-height:16px;font-family:Arial,sans-serif;color:#ffffff;">
                              <a href="http://info.garudamart.com" style="color:#ffffff;text-decoration:underline;">&reg; Info Garuda Mart Indonesia | Prasetyo<br/></a>
                            </p>
                          </td>
                          <td style="padding:0;width:50%;" align="right">
                            <table role="presentation" style="border-collapse:collapse;border:0;border-spacing:0;">
                              <tr>
                                <td style="padding:0 0 0 10px;width:38px;">
                                  <a href="http://www.garudamart.com/" style="color:#ffffff;"><img src="https://info.garudamart.com/assets/images/logo_sm.png" alt="Twitter" width="38" style="height:auto;display:block;border:0;" /></a>
                                </td>
                                <!-- <td style="padding:0 0 0 10px;width:38px;">
                                  <a href="http://www.facebook.com/" style="color:#ffffff;"><img src="https://assets.codepen.io/210284/fb_1.png" alt="Facebook" width="38" style="height:auto;display:block;border:0;" /></a>
                                </td> -->
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
        </body>
        </html>
      ');
            $this->email->subject($judul . ' - ' . $d['nama']);
            if ($this->email->send()) {
              return true;
            } else {
              echo $this->email->print_debugger();
              die;
            }
          endforeach;
        endforeach;
      endforeach;
    endforeach;
  }
}
