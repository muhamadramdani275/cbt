<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Ormtest extends CI_Controller { public function __construct() { goto GebVW; rdH6S: if (!$this->ion_auth->logged_in()) { goto XB0yv; } goto F5ki4; GebVW: parent::__construct(); goto rdH6S; NSmZH: fe22h: goto aCPe8; RoG6h: show_error("\x48\141\x6e\171\x61\x20\x41\144\155\151\x6e\151\x73\164\162\x61\x74\x6f\162\40\171\x61\x6e\x67\40\x64\151\x62\145\x72\x69\x20\x68\x61\153\x20\x75\x6e\164\x75\x6b\40\155\x65\x6e\x67\141\x6b\x73\x65\163\x20\x68\x61\154\141\155\141\156\40\151\156\x69\54\40\x3c\x61\x20\150\x72\x65\146\75\x22" . base_url("\x64\x61\163\x68\x62\x6f\x61\162\x64") . "\42\76\x4b\145\155\142\141\x6c\151\x20\x6b\x65\x20\x6d\x65\156\x75\x20\141\167\141\x6c\x3c\57\x61\x3e", 403, "\101\153\x73\145\163\x20\x54\145\162\x6c\x61\162\141\x6e\147"); goto kBP8Q; L82g3: redirect("\x61\165\x74\x68"); goto NSmZH; kBP8Q: jrvht: goto HReCM; HReCM: goto fe22h; goto h1OfR; F5ki4: if ($this->ion_auth->is_admin()) { goto jrvht; } goto RoG6h; h1OfR: XB0yv: goto L82g3; aCPe8: $this->load->model("\104\x61\x73\x68\142\x6f\141\x72\x64\x5f\x6d\157\144\x65\154", "\x64\141\163\150\x62\157\141\x72\x64"); goto O_00m; O_00m: } public function index() { goto SiQR1; IFv_p: $tp = $this->dashboard->getTahunActive(); goto XNnNK; NhP3B: $this->load->view("\137\x74\x65\x6d\160\154\141\x74\x65\x73\x2f\144\x61\163\150\x62\x6f\141\x72\144\x2f\x5f\x68\145\141\144\x65\x72", $data); goto UYzp5; QRN7A: $data["\x74\160"] = $this->dashboard->getTahun(); goto tLKi1; SiQR1: $user = $this->ion_auth->user()->row(); goto VGffW; tLKi1: $data["\x74\160\137\x61\x63\x74\151\166\x65"] = $tp; goto jfEUg; jfEUg: $data["\163\155\164"] = $this->dashboard->getSemester(); goto dTgxq; VGffW: $data = ["\165\163\145\162" => $user, "\152\x75\x64\x75\154" => "\101\x6e\x61\154\151\163\141\x20\x53\x6f\x61\x6c", "\163\x75\x62\152\165\x64\165\x6c" => "\x41\156\x61\x6c\151\163\141\x20\123\x6f\141\x6c\40\x55\152\151\x61\x6e", "\x73\145\x74\164\151\156\x67" => $this->dashboard->getSetting()]; goto IFv_p; dTgxq: $data["\x73\155\x74\137\x61\143\164\x69\x76\145"] = $smt; goto njaNg; XNnNK: $smt = $this->dashboard->getSemesterActive(); goto QRN7A; njaNg: $data["\x70\x72\157\146\x69\x6c\145"] = $this->dashboard->getProfileAdmin($user->id); goto NhP3B; VfRsI: $this->load->view("\137\164\145\x6d\160\154\x61\164\145\163\57\144\141\163\150\142\x6f\x61\x72\144\x2f\x5f\146\157\157\x74\145\x72"); goto E8prS; UYzp5: $this->load->view("\144\141\x6f\x2f\x6f\x72\155"); goto VfRsI; E8prS: } }
