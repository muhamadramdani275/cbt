<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\102\101\x53\x45\120\101\124\x48") or exit("\116\x6f\40\x64\151\162\x65\143\164\x20\163\143\x72\151\160\x74\x20\141\143\x63\145\163\163\x20\x61\x6c\x6c\x6f\167\x65\x64"); class Luckysheet extends CI_Controller { public function __construct() { goto SW4PU; O6GnX: if (!$this->ion_auth->logged_in()) { goto f_3yA; } goto rJdWL; cftQ0: $this->load->model("\104\141\163\x68\x62\x6f\141\x72\x64\137\x6d\x6f\144\x65\x6c", "\x64\x61\x73\150\142\157\141\x72\144"); goto nCe0X; jOCBv: goto O65jO; goto yUb5T; kDByT: $this->load->model("\104\x72\x6f\x70\144\157\x77\156\x5f\155\x6f\x64\x65\154", "\144\x72\x6f\x70\x64\157\x77\156"); goto tFZ_P; cLPrO: redirect("\141\x75\164\150"); goto DBuyf; SW4PU: parent::__construct(); goto O6GnX; DBuyf: O65jO: goto dG1cM; tFZ_P: $this->load->model("\x4d\141\x73\x74\x65\162\x5f\155\157\144\x65\154", "\x6d\141\x73\164\x65\162"); goto ECM9w; yUb5T: f_3yA: goto cLPrO; z5EGG: uKQHU: goto jOCBv; ECM9w: $this->form_validation->set_error_delimiters('', ''); goto l2Hly; nCe0X: $this->load->model("\122\141\x70\x6f\162\137\x6d\x6f\x64\145\x6c", "\x72\141\160\x6f\x72"); goto k9qiy; dG1cM: $this->load->library(["\x64\x61\x74\x61\x74\x61\x62\x6c\x65\163", "\146\x6f\162\155\137\x76\141\x6c\151\144\141\164\151\x6f\x6e"]); goto cftQ0; aeVVg: show_error("\110\141\x6e\x79\x61\40\x41\144\x6d\151\156\x69\x73\x74\162\x61\164\157\162\x20\x79\141\x6e\x67\x20\x64\x69\x62\145\162\151\40\150\141\153\x20\165\156\164\165\153\40\155\x65\156\147\141\x6b\x73\x65\163\x20\x68\141\154\141\x6d\141\156\40\x69\x6e\151\x2c\x20\x3c\141\x20\x68\162\x65\x66\x3d\42" . base_url("\144\x61\x73\x68\x62\157\x61\162\x64") . "\x22\76\113\145\155\142\x61\154\151\40\153\x65\x20\155\x65\156\165\40\x61\x77\141\154\x3c\57\x61\x3e", 403, "\101\x6b\163\145\x73\40\x54\145\x72\x6c\x61\x72\x61\156\147"); goto z5EGG; rJdWL: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\x67\165\162\165"))) { goto uKQHU; } goto aeVVg; k9qiy: $this->load->model("\113\x65\x6c\141\x73\137\155\157\144\x65\x6c", "\x6b\x65\x6c\141\163"); goto kDByT; l2Hly: } public function output_json($data, $encode = true) { goto nhV2f; Y8n3n: $data = json_encode($data); goto kP0yW; pFpnT: $this->output->set_content_type("\x61\160\160\154\151\143\x61\x74\x69\157\156\x2f\x6a\x73\157\156")->set_output($data); goto KmN5x; kP0yW: pcU4z: goto pFpnT; nhV2f: if (!$encode) { goto pcU4z; } goto Y8n3n; KmN5x: } public function index() { goto RD7mT; cLmSk: $data = ["\x75\163\145\162" => $user, "\x6a\165\144\x75\x6c" => "\125\x73\x65\162\40\115\x61\x6e\141\x67\145\x6d\x65\x6e\x74", "\163\165\142\152\165\144\165\x6c" => "\104\x61\x74\141\x20\125\163\145\x72\x20\x53\151\163\167\x61", "\163\145\x74\164\151\156\147" => $this->dashboard->getSetting()]; goto NJELn; KS8c1: $data["\x73\x6d\x74\137\141\x63\164\151\166\145"] = $smt; goto Z1D7U; RD7mT: $user = $this->ion_auth->user()->row(); goto cLmSk; VDNqN: $smt = $this->dashboard->getSemesterActive(); goto ULdSA; yL7M3: $this->load->view("\x6d\x65\x6d\142\x65\x72\163\57\147\165\162\165\x2f\164\145\x6d\160\154\141\x74\x65\163\x2f\x68\x65\141\144\145\162", $data); goto peRrq; Z1D7U: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto bJscD; PKi8R: $data["\x74\160\x5f\x61\x63\x74\151\166\x65"] = $tp; goto V4jNR; ULdSA: $data["\164\160"] = $this->dashboard->getTahun(); goto PKi8R; NJELn: $tp = $this->dashboard->getTahunActive(); goto VDNqN; ijK7U: $this->load->view("\x6d\145\155\142\x65\162\x73\x2f\147\x75\x72\x75\x2f\164\x65\155\160\x6c\141\x74\145\163\x2f\x66\x6f\x6f\164\145\162"); goto fueSa; peRrq: $this->load->view("\155\x65\155\x62\x65\162\x73\x2f\x67\165\162\165\57\154\165\x63\153\x79\166\x69\145\167"); goto ijK7U; bJscD: $data["\147\165\162\x75"] = $guru; goto yL7M3; V4jNR: $data["\x73\x6d\x74"] = $this->dashboard->getSemester(); goto KS8c1; fueSa: } }
