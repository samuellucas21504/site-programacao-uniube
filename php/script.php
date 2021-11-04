<script type="text/javascript">
        let dataInicio;
        let horaInicio;
        let horaFinal;
        let dataFinal;
        let funcDataInicio = () => {
            if (dataInicio == null) {
                '<?php
                    $data = date("Y-m-d");
                    $novadata = substr($data, 8, 2) . "/" . substr($data, 5, 2) . "/" . substr($data, 0, 4);
                    ?>';
                dataInicio = '<?php echo $novadata ?>';
                document.getElementById("dataInicio").value = dataInicio;
            }
        };
        let funcHoraInicio = () => {

            if (horaInicio == null) {
                '<?php $hora = date("H:i:s");
                    $novahora = substr($hora, 0, 2) . "h" . substr($hora, 3, 2) . "min"; ?>';
                horaInicio = '<?php echo $novahora ?>';
                document.getElementById("horaInicio").value = horaInicio;
            }
        }
        let funcDataFinal = () => {
            if (dataFinal == null) {
                '<?php
                    $data = date("Y-m-d");
                    $novadata = substr($data, 8, 2) . "/" . substr($data, 5, 2) . "/" . substr($data, 0, 4);
                    ?>';
                dataFinal = '<?php echo $novadata ?>';
                document.getElementById("dataFinal").value = dataFinal;
            }
        };
        let funcHoraFinal = () => {
            if (horaFinal == null) {
                '<?php $hora = date("H:i:s");
                    $novahora = substr($hora, 0, 2) . "h" . substr($hora, 3, 2) . "min"; ?>';
                horaFinal = '<?php echo $novahora ?>';
                document.getElementById("horaFinal").value = horaFinal;
            }
        }
    </script>