<script id="swal">
Swal.fire({
    title: "<?= $this->session->flashdata('title'); ?>",
    text: "<?= $this->session->flashdata('text'); ?>",
    icon: "<?= $this->session->flashdata('icon'); ?>",
    showDenyButton: false,
    showCancelButton: false,
    showConfirmButton: false,
    timer: 1500,
}).then(function() {
    let redirect = "<?= $this->session->flashdata('redirect'); ?>";
    if (redirect != "") {
        window.location.href = redirect;
    }
    $("script#swal").remove();
}).catch(swal.noop);
</script>