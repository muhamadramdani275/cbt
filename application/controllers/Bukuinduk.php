<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Bukuinduk extends CI_Controller { public function __construct() { goto dCwFo; aJHB5: $this->load->model("\122\141\160\x6f\x72\x5f\x6d\157\144\145\154", "\162\141\x70\x6f\162"); goto fOLdS; nlXq3: $this->load->model("\x44\x61\163\x68\142\157\x61\162\144\x5f\155\x6f\144\x65\154", "\144\x61\x73\x68\142\x6f\x61\x72\144"); goto aJHB5; HKF25: WGv4Q: goto NQkwW; IiZBK: $this->form_validation->set_error_delimiters('', ''); goto izPjd; hWbbI: p7fvV: goto tx9iP; O6wii: if (!$this->ion_auth->logged_in()) { goto WGv4Q; } goto PPXqp; tx9iP: $this->load->library(["\x64\x61\164\x61\x74\141\x62\x6c\x65\x73", "\146\x6f\x72\x6d\137\166\141\x6c\151\x64\x61\x74\x69\157\x6e"]); goto nlXq3; OZ4kO: $this->load->model("\104\162\x6f\160\144\157\x77\156\137\155\157\x64\x65\154", "\x64\x72\157\160\144\157\167\x6e"); goto FiEGK; Kma27: tavI3: goto sm8Ql; GSRPI: show_error("\110\x61\x6e\171\141\x20\x41\144\x6d\x69\156\151\x73\164\x72\141\164\x6f\x72\x20\x79\x61\x6e\147\x20\x64\x69\142\145\162\151\40\150\x61\153\x20\165\156\x74\x75\153\x20\155\145\x6e\x67\141\x6b\163\145\163\40\x68\x61\x6c\x61\x6d\141\x6e\40\151\x6e\x69\54\40\74\141\x20\150\162\145\146\75\x22" . base_url("\144\x61\163\150\x62\x6f\141\x72\144") . "\x22\76\113\145\x6d\142\x61\x6c\x69\40\x6b\x65\x20\155\145\156\165\x20\141\167\x61\x6c\74\x2f\x61\76", 403, "\x41\153\163\x65\163\40\124\x65\x72\x6c\x61\x72\141\x6e\147"); goto Kma27; dCwFo: parent::__construct(); goto O6wii; NQkwW: redirect("\141\x75\x74\150"); goto hWbbI; FiEGK: $this->load->model("\115\x61\x73\164\145\x72\137\155\x6f\144\x65\154", "\x6d\x61\163\164\145\x72"); goto IiZBK; sm8Ql: goto p7fvV; goto HKF25; PPXqp: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\147\x75\162\165"))) { goto tavI3; } goto GSRPI; fOLdS: $this->load->model("\x4b\145\154\141\163\x5f\x6d\x6f\x64\145\154", "\x6b\x65\x6c\x61\163"); goto OZ4kO; izPjd: } public function output_json($data, $encode = true) { goto fNprc; fNprc: if (!$encode) { goto iQAgH; } goto a6qH1; vigEj: iQAgH: goto LwSzv; a6qH1: $data = json_encode($data); goto vigEj; LwSzv: $this->output->set_content_type("\x61\160\160\154\151\x63\x61\x74\x69\x6f\156\x2f\152\x73\157\x6e")->set_output($data); goto Co0I1; Co0I1: } function generateTahunMasuk($tp, $level) { goto tHw2p; ogLYl: wLJxN: goto Q94gj; PzCmz: QCnnw: goto mksXk; Q94gj: $thn = $tahun - 1; goto otIl6; otIl6: goto QCnnw; goto fgtfW; tHw2p: $tahun = explode("\57", $tp)[0]; goto LHPdP; sOhcT: $thn = $tahun; goto PzCmz; LHPdP: $thn = $tahun; goto DsQ8k; DsQ8k: if ($level == 9) { goto Ow2cG; } goto e2kGE; zIwJg: goto QCnnw; goto MVDLf; mksXk: return $thn; goto K30UZ; pDzRp: goto QCnnw; goto ogLYl; e2kGE: if ($level == 8) { goto wLJxN; } goto xe55L; MVDLf: Ow2cG: goto vLSlk; vLSlk: $thn = $tahun - 2; goto pDzRp; fgtfW: Lnd0H: goto sOhcT; xe55L: if ($level == 7) { goto Lnd0H; } goto zIwJg; K30UZ: } public function index() { goto kxCqy; dPj3i: $fisik_siswa = $this->rapor->getAllRaporFisik(); goto sQqXp; SSAe8: ZYcH0: goto bhh3e; cLGPJ: $data["\x61\x72\x72\x5f\164\x65\163\x74"] = $thn_siswa; goto bFYo_; nz6DK: $data["\x72\x61\x70\157\162\137\x66\151\x73\151\153"] = $rapor_fisik; goto Mb8Bz; tucd2: $data = ["\165\163\145\162" => $user, "\x6a\x75\144\165\x6c" => "\x42\165\153\165\40\x49\156\144\165\x6b", "\163\165\142\x6a\x75\144\x75\x6c" => "\x42\165\153\165\40\111\156\x64\165\x6b", "\163\x65\x74\164\151\x6e\147" => $setting]; goto OlSt8; MPVWZ: $this->load->view("\137\164\145\155\160\x6c\141\x74\x65\163\x2f\x64\141\163\x68\x62\157\x61\162\144\x2f\137\150\x65\141\144\145\x72", $data); goto Q5lML; MH9Vl: $this->load->view("\x5f\164\145\x6d\x70\154\x61\164\x65\x73\57\144\141\163\x68\142\157\x61\x72\144\57\137\146\x6f\x6f\164\x65\162"); goto ZM34Z; knWk3: $data["\x74\x70\x5f\x61\143\164\x69\x76\145"] = $tp; goto SJOfo; dlqdw: $deskFisik = $this->rapor->getAllDeskripsiFisikKelas(); goto dPj3i; Q5lML: $this->load->view("\x73\145\x74\x74\151\x6e\147\57\151\156\144\x75\153"); goto MH9Vl; hwBk7: $smt = $this->dashboard->getSemesterActive(); goto Ox3a9; kxCqy: $user = $this->ion_auth->user()->row(); goto Y0e_n; iKsI9: $arrSmt = $this->dashboard->getSemester(); goto IxsgL; wqjZv: $data["\152\x75\x6d\154\x61\x68\137\154\165\154\x75\163"] = $this->rapor->getJumlahLulus($tp->id_tp - 1, "\62", $level); goto MPVWZ; hN5Al: $thn_siswa = []; goto IjF3P; Ox3a9: $data["\x74\x70"] = $arrTp; goto knWk3; Mb8Bz: $data["\156\x6f\151\156\x64\165\x6b"] = $noinduk; goto mSDXd; s11bE: $data["\x70\x72\157\x66\151\154\145"] = $this->dashboard->getProfileAdmin($user->id); goto z8bSX; bhh3e: R1YPh: goto AaQWl; x9Sjp: $uids = $this->db->select("\151\x64\137\163\x69\163\x77\141\54\40\x75\x69\x64")->from("\x6d\141\163\164\145\162\137\x73\x69\x73\x77\141")->get()->result(); goto Iqp23; TsZUG: $data["\144\145\x74\x61\x69\x6c"] = $data_siswa; goto cLGPJ; AaQWl: $siswas = $this->master->getDataInduk(); goto dlqdw; Y0e_n: $setting = $this->dashboard->getSetting(); goto tucd2; Iqp23: foreach ($uids as $uid) { goto jKQB2; hJfbV: $this->db->insert("\142\165\x6b\165\137\x69\x6e\x64\x75\x6b", $uid); goto yyixy; yyixy: FRmDx: goto iWfQJ; iWfQJ: wzU91: goto DCUDl; jKQB2: $check = $this->db->select("\151\144\x5f\163\151\163\x77\x61")->from("\x62\x75\x6b\x75\x5f\151\156\x64\165\153")->where("\151\144\x5f\163\151\163\167\141", $uid->id_siswa); goto NDy3C; NDy3C: if (!($check->get()->num_rows() == 0)) { goto FRmDx; } goto hJfbV; DCUDl: } goto SSAe8; YlOBn: $data["\163\155\x74\x5f\x61\x63\164\151\166\x65"] = $smt; goto s11bE; z8bSX: $count_siswa = $this->db->count_all("\x6d\x61\163\164\x65\162\x5f\x73\151\163\x77\x61"); goto cmNlr; OlSt8: $arrTp = $this->dashboard->getTahun(); goto iKsI9; IjF3P: foreach ($siswas as $id_siswa => $siswa) { goto zzEcp; zzEcp: $rapor_fisik = isset($fisik_siswa[$id_siswa]) ? $fisik_siswa[$id_siswa] : []; goto JZFqC; T72R2: if ($setting->jenjang == "\x31") { goto fu0Y0; } goto lvBkX; ZEZEn: W5xPL: goto ZixfU; EBcpp: $tinggi = []; goto k3x6J; lvBkX: $data_tahun = [intval($tahunMasuk) . "\x2f" . (intval($tahunMasuk) + 1), intval($tahunMasuk) + 1 . "\57" . (intval($tahunMasuk) + 2), intval($tahunMasuk) + 2 . "\57" . (intval($tahunMasuk) + 3)]; goto qMp6j; ZixfU: $berat = []; goto EBcpp; wG_wB: NKhrW: goto AZCo8; nckqA: eQZSM: goto gplKr; AZCo8: $noinduk[$siswa->id_siswa] = ["\156\x69\163" => $siswa->nis, "\x6e\x69\163\156" => $siswa->nisn]; goto F5JkH; mnM_0: foreach ($data_tahun as $dtp) { goto KwIcy; IQXkT: x3y_W: goto VZZel; VZZel: zfrgT: goto km_Ky; SvKVm: $penyakit[$dtp][2] = ''; goto rwSkF; R8gMY: $tinggi[$dtp][1] = ''; goto hb61J; hb61J: $tinggi[$dtp][2] = ''; goto u5lSu; KwIcy: $berat[$dtp][1] = ''; goto oBE5E; rwSkF: $kelainan[$dtp][1] = ''; goto hyytx; eMhNz: iTjbh: goto IQXkT; RYPMy: if (!isset($rapor_fisik[$dtp])) { goto x3y_W; } goto dxRwO; oBE5E: $berat[$dtp][2] = ''; goto R8gMY; dxRwO: foreach ($rapor_fisik[$dtp]->fisik as $rf) { goto TgeA9; TgeA9: $berat[$dtp][$rf->id_smt] = $rf->berat; goto d4t68; UwRxI: F6jLJ: goto aAMYh; d4t68: $tinggi[$dtp][$rf->id_smt] = $rf->tinggi; goto UwRxI; aAMYh: } goto eMhNz; hyytx: $kelainan[$dtp][2] = ''; goto RYPMy; u5lSu: $penyakit[$dtp][1] = ''; goto SvKVm; km_Ky: } goto wG_wB; fGQhb: $data_tahun = [intval($tahunMasuk) . "\x2f" . (intval($tahunMasuk) + 1), intval($tahunMasuk) + 1 . "\x2f" . (intval($tahunMasuk) + 2), intval($tahunMasuk) + 2 . "\57" . (intval($tahunMasuk) + 3), intval($tahunMasuk) + 3 . "\x2f" . (intval($tahunMasuk) + 4), intval($tahunMasuk) + 4 . "\57" . (intval($tahunMasuk) + 5), intval($tahunMasuk) + 5 . "\57" . (intval($tahunMasuk) + 6)]; goto ZEZEn; H4JfW: $tahunMasuk = explode("\x2d", $siswa->tahun_masuk)[0]; goto PZTod; gplKr: if ($siswa->tahun_masuk != null) { goto KWmmj; } goto ZeQgj; PZTod: W1LY6: goto T72R2; qMp6j: goto W5xPL; goto o5zf7; UIVvQ: Fg1uI: goto hp4VW; vcv31: goto W1LY6; goto NAOyA; k3x6J: $penyakit = []; goto jkFab; o5zf7: fu0Y0: goto fGQhb; NAOyA: KWmmj: goto H4JfW; F5JkH: $data_siswa[$siswa->id_siswa] = ["\x6e\151\x73" => $siswa->nis, "\156\151\163\x6e" => $siswa->nisn, "\x70\x61\147\145\61" => ["\101" => ["\164\x69\164\154\x65" => "\x4b\x45\x54\105\x52\x41\x4e\107\101\116\40\124\105\116\124\x41\116\107\40\104\111\x52\x49\x20\x53\x49\123\127\x41", "\x76\x61\154\165\145" => ["\116\x61\x6d\141\x20\123\151\163\x77\141" => ["\x4e\x61\x6d\x61\40\114\145\x6e\x67\x6b\x61\x70" => $siswa->nama, "\116\141\x6d\x61\40\x50\141\x6e\x67\x67\x69\154\x61\156" => ''], "\x4a\145\156\151\163\x20\113\x65\154\141\x6d\x69\x6e" => $siswa->jenis_kelamin, "\x54\x65\155\160\x61\164\x20\x64\141\156\x20\x54\147\154\40\114\141\150\x69\x72" => $siswa->tempat_lahir, "\x41\x67\x61\155\141" => $siswa->agama, "\x4b\145\167\x61\162\147\141\156\x65\147\141\162\x61\x61\x6e" => $siswa->warga_negara, "\x41\x6e\141\x6b\40\x6b\x65" => $siswa->anak_ke, "\x4a\x75\x6d\x6c\141\150\x20\x53\x64\162\56\x20\113\141\x6e\144\165\x6e\x67" => '', "\x4a\x75\155\x6c\141\150\x20\123\144\162\x2e\x20\124\151\x72\151" => '', "\112\165\x6d\x6c\x61\150\x20\123\144\162\56\x20\x41\156\x67\x6b\x61\x74" => '', "\101\156\141\x6b\40\131\x61\164\x69\x6d\57\x59\141\x74\151\x6d\40\x50\151\141\x74\165" => '', "\x42\x61\150\141\x73\141\x20\x53\x65\x68\141\x72\151\55\x68\141\162\x69" => '']], "\x42" => ["\164\151\164\154\145" => "\x4b\105\x54\x45\x52\x41\x4e\x47\x41\x4e\x20\x54\x45\x4d\x50\x41\x54\40\x54\111\x4e\x47\x47\101\114", "\166\x61\x6c\x75\x65" => ["\x41\x6c\141\x6d\141\164" => $siswa->alamat, "\x4e\x6f\155\157\162\40\x54\x65\154\x65\x70\x6f\x6e" => $siswa->hp, "\124\151\x6e\147\x67\141\x6c\x20\102\145\162\163\x61\x6d\141" => '', "\112\x61\162\x61\x6b\x20\x6b\145\x20\123\x65\153\157\x6c\141\150" => '']], "\x43" => ["\164\151\x74\x6c\145" => "\x4b\105\124\x45\122\x41\x4e\107\101\x4e\x20\113\x45\123\x45\110\101\124\x41\x4e", "\166\141\154\165\145" => ["\107\157\x6c\x6f\x6e\147\x61\x6e\x20\104\141\x72\141\150" => '', "\x4b\x65\141\x64\141\141\x6e\40\112\141\163\155\x61\156\151" => "\133\x74\141\x62\x6c\145\135"], "\x74\141\x62\154\145" => ["\164\x61\x68\x75\156" => $data_tahun, "\142\x65\162\x61\164" => $berat, "\164\x69\156\147\x67\x69" => $tinggi, "\x70\x65\156\x79\x61\x6b\151\164" => $penyakit, "\x6b\x65\x6c\x61\151\x6e\141\156" => $kelainan]], "\104" => ["\x74\151\x74\154\x65" => "\113\105\x54\105\x52\x41\x4e\107\x41\x4e\x20\120\105\116\x44\111\x44\111\113\101\x4e", "\166\x61\x6c\x75\x65" => ["\x50\x65\x6e\x64\151\x64\x69\x6b\x61\x6e\x20\123\x65\142\x65\x6c\165\x6d\156\x79\x61" => ["\x4c\165\x6c\165\163\141\x6e\x20\104\x61\x72\151" => $siswa->sekolah_asal, "\x4e\157\x6d\x6f\x72\40\x49\152\x61\x7a\x61\x68" => ''], "\120\151\x6e\x64\141\x68\141\156" => ["\104\141\162\x69\x20\x53\x65\x6b\157\154\x61\150" => '', "\x41\x6c\x61\x73\141\156" => ''], "\104\151\164\x65\x72\151\155\x61\40\x44\x69\163\x65\153\157\154\x61\x68\x20\111\156\x69" => ["\x44\151\x20\x54\151\x6e\x67\x6b\x61\164" => $siswa->kelas_awal, "\x4b\145\x6c\x6f\155\160\157\x6b" => '', "\112\x75\162\165\163\x61\156" => '', "\124\x61\x6e\x67\147\141\154" => $siswa->tahun_masuk]]]], "\160\141\x67\x65\x32" => ["\105" => ["\x74\151\x74\154\x65" => "\113\105\124\x45\122\101\116\x47\x41\x4e\40\x54\105\x4e\x54\101\x4e\107\x20\x41\x59\x41\x48\40\113\101\x4e\104\x55\x4e\x47", "\x76\x61\154\165\145" => ["\x4e\x61\x6d\x61" => $siswa->nama_ayah, "\124\145\x6d\x70\x61\x74\x20\144\x61\x6e\40\x54\x61\x6e\x67\147\x61\x6c\x20\114\141\150\x69\162" => $siswa->tgl_lahir_ayah, "\101\x67\141\x6d\x61" => '', "\113\145\x77\141\x72\x67\141\156\145\x67\x61\x72\x61\x61\x6e" => '', "\x50\145\x6e\x64\x69\144\x69\153\141\x6e" => $siswa->pendidikan_ayah, "\120\145\153\145\x72\x6a\x61\141\x6e" => $siswa->pekerjaan_ayah, "\x50\145\156\x67\x68\x61\x73\x69\154\141\156\40\x70\x65\162\40\x42\x75\154\141\156" => '', "\101\x6c\x61\155\x61\x74\x20\x2f\40\116\157\155\157\x72\40\x54\145\154\145\x70\x6f\156" => $siswa->nohp_ayah, "\113\x65\142\x65\x72\x61\x64\141\141\156\40\101\171\x61\150" => "\115\x61\x73\x69\150\x20\x48\x69\x64\x75\160\40\57\x20\x4d\x65\x6e\151\156\x67\147\x61\154\40\104\x75\156\x69\x61\40\x54\141\150\x75\156\72\40\x2e\x2e\x2e\56\56\56\x2e\x2e"]], "\106" => ["\x74\x69\x74\154\x65" => "\x4b\105\124\x45\x52\x41\x4e\107\101\116\40\124\x45\x4e\x54\x41\x4e\x47\x20\x49\x42\125\40\x4b\x41\x4e\104\125\116\107", "\x76\141\x6c\165\145" => ["\116\141\x6d\x61" => $siswa->nama_ayah, "\124\145\x6d\160\141\164\40\x64\141\x6e\40\x54\141\x6e\147\x67\141\154\x20\x4c\141\x68\151\162" => $siswa->tgl_lahir_ayah, "\101\x67\141\x6d\x61" => '', "\113\145\x77\141\x72\147\x61\156\x65\x67\141\x72\141\x61\x6e" => '', "\x50\145\156\144\x69\x64\x69\x6b\x61\x6e" => $siswa->pendidikan_ayah, "\120\x65\x6b\145\x72\x6a\141\141\x6e" => $siswa->pekerjaan_ayah, "\x50\x65\x6e\147\150\x61\x73\151\x6c\141\x6e\40\160\145\162\40\x42\x75\154\141\156" => '', "\x41\154\x61\x6d\x61\164\x20\57\x20\x4e\x6f\155\157\162\x20\124\145\154\x65\x70\x6f\x6e" => $siswa->nohp_ayah, "\x4b\x65\x62\145\x72\x61\144\x61\141\x6e\40\x49\142\165" => "\x4d\x61\163\x69\150\x20\110\x69\x64\165\x70\x20\57\x20\115\145\x6e\151\156\147\147\141\x6c\40\x44\x75\156\x69\141\40\124\141\x68\x75\156"]], "\107" => ["\x74\x69\x74\x6c\x65" => "\113\105\x54\105\122\101\x4e\x47\101\x4e\40\x54\105\116\124\101\116\x47\40\127\x41\114\x49", "\x76\141\154\x75\145" => ["\x4e\x61\x6d\x61" => $siswa->nama_ayah, "\x54\x65\x6d\x70\141\164\40\144\x61\x6e\x20\x54\141\156\x67\x67\141\154\x20\114\141\150\x69\x72" => $siswa->tgl_lahir_ayah, "\x41\x67\x61\155\x61" => '', "\113\145\167\141\162\147\141\x6e\x65\147\x61\162\141\141\156" => '', "\x50\x65\156\144\x69\144\151\x6b\141\156" => $siswa->pendidikan_ayah, "\x50\145\153\x65\x72\152\141\141\x6e" => $siswa->pekerjaan_ayah, "\120\145\x6e\147\x68\x61\163\x69\x6c\x61\156\x20\x70\145\x72\x20\102\x75\154\141\156" => '', "\x41\154\141\x6d\x61\164\x20\x2f\40\116\157\x6d\x6f\162\x20\124\x65\x6c\145\x70\157\156" => $siswa->nohp_ayah]], "\x48" => ["\x74\x69\x74\x6c\x65" => "\x4b\105\x47\x45\x4d\101\122\101\116\40\x53\x49\123\x57\101", "\x76\141\x6c\x75\x65" => ["\113\x65\163\145\x6e\x69\141\x6e" => '', "\x4f\x6c\141\x68\x20\122\141\x67\141" => '', "\117\162\147\x61\156\151\x73\141\x73\151" => '', "\114\141\151\x6e\xe2\200\223\154\x61\x69\156" => '']]], "\x70\x61\147\145\x33" => ["\111" => ["\164\x69\x74\154\x65" => "\x4b\105\x54\x45\122\101\x4e\107\x41\x4e\40\x50\105\x52\x4b\x45\115\x42\x41\116\107\101\x4e\x20\123\x49\x53\x57\x41", "\166\x61\x6c\165\145" => ["\x4d\x65\156\x65\x72\151\x6d\141\40\x42\145\x61\x20\123\151\x73\167\141" => "\133\x74\x61\x68\x75\156\x5d", "\115\145\x6e\151\x6e\x67\x67\141\154\153\x61\x6e\x20\123\145\153\x6f\154\x61\150" => ["\124\141\x6e\x67\147\141\154" => '', "\101\154\141\163\141\156" => ''], "\101\153\x68\151\x72\40\120\145\x6e\144\x69\144\x69\153\141\x6e" => ["\x54\x61\x6d\141\164\x20\102\145\154\x61\x6a\141\162" => $siswa->tahun_lulus, "\116\x6f\x6d\157\x72\40\111\x6a\141\x7a\141\x68" => $siswa->no_ijazah]], "\164\141\x68\x75\x6e" => ["\124\141\150\165\156\40\56\56\56\x2e\x2e\x2e\x2e\x2e\x2e\56\x2e\56\x2f\x20\124\x4b\x20\xe2\200\xa6\342\x80\246\342\x80\246\342\200\246\342\200\246\xe2\200\246\342\x80\xa6\342\200\246\56\56\x64\141\162\151\342\x80\xa6\342\200\246\342\200\246\xe2\x80\xa6\xe2\x80\246\342\x80\246\xe2\200\246\342\x80\xa6\56\x2e", "\124\141\150\165\x6e\x20\x2e\x2e\x2e\56\x2e\x2e\x2e\56\56\56\x2e\56\57\x20\x54\x4b\40\342\200\246\xe2\200\246\xe2\200\xa6\342\x80\246\xe2\x80\246\342\200\246\342\200\xa6\xe2\200\246\56\56\144\x61\162\151\xe2\200\xa6\xe2\x80\246\342\x80\xa6\xe2\200\246\xe2\x80\246\xe2\200\246\xe2\x80\xa6\342\200\xa6\56\56", "\124\x61\150\165\156\x20\56\x2e\56\x2e\x2e\56\56\x2e\x2e\x2e\x2e\x2e\57\x20\x54\x4b\x20\xe2\x80\246\xe2\200\246\342\x80\246\342\x80\246\342\200\246\xe2\x80\xa6\342\200\xa6\342\200\246\x2e\x2e\x64\x61\162\151\xe2\x80\246\342\200\xa6\xe2\x80\xa6\xe2\200\xa6\xe2\200\xa6\342\x80\246\342\x80\246\342\x80\246\x2e\x2e"]], "\x4a" => ["\164\x69\x74\154\145" => "\113\105\124\105\122\x41\x4e\107\101\x4e\x20\x53\105\124\105\x4c\x41\x48\40\x53\105\x4c\x45\x53\x41\111\40\120\x45\116\104\111\104\111\113\x41\116", "\166\141\x6c\x75\x65" => ["\x4d\x65\x6c\141\x6e\x6a\x75\164\x6b\141\156\x20\x64\x69" => '', "\102\x65\x6b\x65\162\152\x61" => ["\124\141\x6e\x67\x67\141\x6c\x20\x4d\x75\x6c\141\151\40\102\x65\x6b\x65\162\152\x61" => '', "\116\141\155\x61\40\x54\x65\155\x70\x61\164\40\x42\145\153\x65\162\152\141" => '', "\x50\145\x6e\x67\150\141\x73\x69\x6c\x61\156" => '']]], "\x4b" => ["\x74\x69\x74\154\x65" => "\114\x41\x49\116\x20\342\x80\223\x20\x4c\101\111\116", "\166\x61\x6c\x75\145" => ["\103\x61\164\x61\x74\x61\156\x20\x59\x61\156\147\x20\120\x65\156\x74\x69\x6e\x67" => '']]]]; goto UIVvQ; ZeQgj: $tahunMasuk = ''; goto vcv31; jkFab: $kelainan = []; goto mnM_0; JZFqC: foreach ($rapor_fisik as $rf) { goto z8LKj; FVVQe: foreach ($rf->fisik as $value) { $value->kondisi = unserialize($value->kondisi); LT82n: } goto uMFNe; z8LKj: $rf->fisik = unserialize($rf->fisik); goto FVVQe; edUTb: rdXEn: goto oX3Bi; uMFNe: VyPvI: goto edUTb; oX3Bi: } goto nckqA; hp4VW: } goto AO85k; cmNlr: $count_induk = $this->db->count_all("\x62\165\x6b\x75\x5f\x69\156\144\x75\153"); goto ZMlpV; mSDXd: $data["\x73\151\163\x77\141\x73"] = $siswas; goto TsZUG; sQqXp: $data_siswa = []; goto hN5Al; SJOfo: $data["\163\x6d\x74"] = $arrSmt; goto YlOBn; bFYo_: $level = $setting->jenjang == "\61" ? "\x36" : ($setting->jenjang == "\62" ? "\x39" : ($setting->jenjang == "\61" ? "\x33" : "\61\62")); goto wqjZv; AO85k: rD3C5: goto nz6DK; IxsgL: $tp = $this->dashboard->getTahunActive(); goto hwBk7; ZMlpV: if (!($count_siswa > $count_induk)) { goto R1YPh; } goto x9Sjp; ZM34Z: } }
