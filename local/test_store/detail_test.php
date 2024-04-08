<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài thi</title>
    <style>
        *{ font-family: DejaVu Sans;}
        html{
            margin: 0;
        }

        body {
            margin: 0 50px;
        }
        table, td, th {
            border: 1px solid;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            text-align: left;
        }

        .content {
            margin-top: 8px;
        }

    </style>
</head>
<body>
    <h1>Bài thi</h1>
    <table class="table table-bordered table-sm">  
        <tbody>
            <tr>
                <th class="cell" scope="row">
                    <span class="userinitials size-35">Họ và tên</span>
                </th>
                <td class="cell">
                    <?=$fname?> <?=$lname?>
                </td>
            </tr>
            <tr>
                <th class="cell" scope="row">Bắt đầu</th>
                <td class="cell">
                    <?=$tstart?>
                </td>
            </tr>
            <tr>
                <th class="cell" scope="row">Trạng thái</th>
                <td class="cell"><?=$state?></td>
            </tr>
            <tr>
                <th class="cell" scope="row">Kết thúc</th>
                <td class="cell">
                    <?=$tfinish?>
                </td>
            </tr>
            <tr>
                <th class="cell" scope="row">Tổng thời gian</th>
                <td class="cell"><?=$timesum?></td>
            </tr>
            <tr>
                <th class="cell" scope="row">Điểm</th>
                <td class="cell"><?=$sumgradesqa?>/<?=$sumgradesq?></td>
            </tr>
            <tr>
                <th class="cell" scope="row">Điểm 10</th>
                <td class="cell"><b><?=$rawgrade?></b> out of <?=$grade?> (<b><?=$percent?></b>%)</td>
            </tr>
        </tbody>
    </table>
    <!-- ---------- -->
    <?php foreach ($q_info as $key => $info): ?>
    <div class="content">
        <div class="qtext">Câu <?=$key+1?>: <?=$info['qtext']?></div>
            <fieldset>
                <div class="answer">
                    <?php foreach ($info['aa'] as $answer): ?>
                    <div class="r0">
                        <i class="icon fa fa-{{icon}} {{icon_color}} fa-fw"></i>
                        <input type="radio" disabled="disabled" <?= $checked ?> style="<?= $appearance ?>">
                        <label class="ml-1"><?= $answer['a'] ?></label>
                    </div>
                    <?php endforeach; ?>
                </div>
            </fieldset>
        </div>
    </div>
    <?php endforeach; ?>
</body>
</html>