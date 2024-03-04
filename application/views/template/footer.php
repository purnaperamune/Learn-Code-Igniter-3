<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script><script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function () {

            $('.confirm-delete').click(function (e) {
            e.preventDefault();

            confirmDialog =confirm("Are you sure that you want to delete this?")

            if(confirmDialog) {
                console.log("FFf")
                var id = $(this).val();
                alert(id);

                $.ajax({
                    type: "DELETE",
                    url: "/employee/confirmdelete/"+id,
                    success:function (response){
                        alert("Deleted Successfully");
                        window.location.reload();
                    }
                });
        }
    })
    })
        

    

    </script>

    
  </body>
</html>