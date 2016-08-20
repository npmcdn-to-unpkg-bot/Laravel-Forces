<script>
    swal({   title: "{{session()->get('name')}}", text:"was added to players", type: "success",  timer: 1500,
        showConfirmButton: false });
</script>
<script>
    swal({   title: {{session()->get('name')}} + " could not be added",   text: "Please contact us",   type: "error" })
</script>