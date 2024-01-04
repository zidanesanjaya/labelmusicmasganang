<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="tab-pane bg-white rounded" style="overflow-x: auto;" id="contact-us">
    <table class="table" style="width:1150px">
        <thead>
            <tr>
                <th scope="col" style="width:200px;">title</th>
                <th scope="col" style="width:300px;">Input</th>
                <th scope="col" style="width:500px;">Icon</th>
                <th scope="col" style="width:200px;">Is Show</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Instagram</td>
                <td><input type="text" class="form-control"/></td>
                <td>
                    <!-- <input type="file" class="form-control"/> -->
                    <div class="row">
                        <div class="col-10">
                            <select name="" id="iconSelect" class="form-control">
                                <option value="mdi mdi-instagram fa-2x">fa fa-instagram</option>
                                <option value="mdi mdi-facebook fa-2x">fa fa-facebook</option>
                            </select>
                        </div>
                        <div class="col-2 text-center d-flex align-items-center">
                            <i id="selectedIcon" class="fa fa-instagram fa-2x"></i>
                        </div>
                    </div>
                </td>
                <td class="d-flex justify-content-center">
                    <div class="form-check form-switch" style="font-size: 1.5rem;">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked>
                        <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        // Ketika nilai pada select berubah
        $("#iconSelect").on("change", function () {
            // Perbarui nilai pada elemen <i> sesuai dengan nilai yang dipilih
            var selectedIconClass = $(this).val();
            $("#selectedIcon").attr("class", selectedIconClass);
        });
    });
</script>
