<div style="background-color:#F4F8F9;">
    <table cellpadding="0" cellspacing="0" style="background-color:#F4F8F9;line-height:1.5;" width="100%">
        <tbody>
            <tr>
                <td align="center" style="background-color:#F4F8F9;background-position:50% 0;">
                    <table cellpadding="0" cellspacing="0" style="width:100%;max-width:600px;margin:0 auto;" width="500">
                        <tbody>
                            <tr>
                                <td align="center" width="100%">
                                    <table cellpadding="0" cellspacing="0" style="max-width:600px;" width="100%">
                                        <tbody>
                                            <tr>
                                                <td>
                                                	<br>
                                                	<br>
                                                    <table cellpadding="0" cellspacing="0" style="width:100%;border-radius:8px;max-width:600px;background-color:#ffffff;margin:0 auto;" width="500">
                                                        <tbody>
                                                        	<tr>
                                                        		<td>&nbsp;</td>
                                                        	</tr>
                                                        	<tr>
                                                        		<td>&nbsp;</td>
                                                        	</tr>
                                                            <tr>
                                                                <td style='color:#3f4652;padding-left:28px;padding-right:28px;font-size:30px;font-family:"Open Sans",Arial,sans-serif;font-weight:100;text-align:center;'>
                                                                    <font face="'Open Sans', sans-serif">Обращение по вопросам предотвращения коррупции сотрудников органов труда</font>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                        		<td>&nbsp;</td>
                                                        	</tr>
                                                            <tr>
                                                                <td style='color:#3f4652;padding-left:28px;padding-right:28px;font-size:18px;font-family:"Open Sans",sans-serif;font-weight:100;text-align:left;'>
                                                                    <p>
                                                                        <strong>Тип пользователя</strong><br>
                                                                        {{$model['user_type']}}
                                                                    </p>
                                                                    <p>
                                                                        <strong>Ф.И.О. Заявителя/наименование юр.лица</strong><br>
                                                                        {{$model['fio']}}
                                                                    </p>
                                                                    <p>
                                                                        <strong>Телефон</strong><br>
                                                                        {{$model['phone']}}
                                                                    </p>
                                                                    <?php if ($model['email']): ?>
                                                                    <p>
                                                                        <strong>Электронная почта</strong><br>
                                                                        {{$model['email']}}
                                                                    </p>
                                                                    <?php endif ?>
                                                                    <p>
                                                                        <strong>Адрес</strong><br>
                                                                        {{$model['address']}}
                                                                    </p>
                                                                    <p>
                                                                        <strong>Текст обращения</strong><br>
                                                                        <?= nl2br($model['content']) ?>
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                        		<td>&nbsp;</td>
                                                        	</tr>
                                                        	<tr>
                                                        		<td>&nbsp;</td>
                                                        	</tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <table cellpadding="0" cellspacing="0" style="width:100%;border-radius:8px;max-width:500px;background-color:#ffffff;margin:0 auto;" width="500">
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <table cellpadding="0" cellspacing="0" style="width:100%;max-width:500;margin:0 auto;" width="500">
                                                        <tbody>
                                                            <tr>
                                                        		<td>&nbsp;</td>
                                                        	</tr>
                                                            <tr>
																<td style="color:#9fa2a8;padding-left:28px;padding-right:28px;font-size:13px;font-family:&quot;Open Sans&quot;,Arial,sans-serif;font-weight:100;text-align:center;"><font face="'Open Sans', sans-serif">Министерство занятости и трудовых отношений Республики Узбекистан</font></td>
															</tr>
                                                            <tr>
                                                                <td style='color:#9fa2a8;padding-left:3px;padding-right:3px;font-size:12px;font-family:"Open Sans",Arial,sans-serif;text-decoration:none;font-weight:100;text-align:center;word-break:break-all;overflow-wrap:break-word;'>
                                                                    <a href="https://mehnat.uz" style="color:#9fa2a8;" target="_blank">mehnat.uz</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                        		<td>&nbsp;</td>
                                                        	</tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                        		<td>&nbsp;</td>
                                        	</tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
    <br>
</div>