<?php

/**
 * ------------------------------------------------------------------------
 * CiSkeleton Admin Language File
 * ------------------------------------------------------------------------
 * This file contains all language lines used in the CSK admin dashboard.
 * Each section is separated by comments for easier navigation and maintenance.
 */

/**
 * ------------------------------------------------------------------------
 * Core Dashboard Section
 * ------------------------------------------------------------------------
 * General terms and messages used across the admin dashboard.
 */
$lang['admin_components'] = 'Компоненти';
$lang['admin_content'] = 'Контент';
$lang['admin_database_backup'] = 'Резервні копії бази даних';
$lang['admin_extensions'] = 'Розширення';
$lang['admin_firewall'] = 'Брандмауер';
$lang['admin_help'] = 'Допомога';
$lang['admin_languages'] = 'Мови';
$lang['admin_logs'] = 'Системні журнали';
$lang['admin_media'] = 'Медіатека';
$lang['admin_modules'] = 'Модулі';
$lang['admin_plugins'] = 'Плагіни';
$lang['admin_reports'] = 'Журнал активності';
$lang['admin_settings'] = 'Системні налаштування';
$lang['admin_sysinfo'] = 'Інформація про систему';
$lang['admin_system'] = 'Система';
$lang['admin_system_firewall'] = 'Системний брандмауер';
$lang['admin_themes'] = 'Теми';
$lang['admin_updates'] = 'Оновлення системи';
$lang['admin_users'] = 'Користувачі';
$lang['admin_view_site'] = 'Переглянути сайт';
$lang['per_page'] = 'На сторінку';

// Generic Messages
$lang['admin_footer_thankyou'] = 'Дякуємо за створення з <a href="%s" target="_blank">%s</a>.';
$lang['admin_items_active_count'] = '=0{Немає активних елементів.} other{<b>#</b> з <b>%s</b> елементів активні.}';

/**
 * ---------------------------------------------------------------
 * Extension Install Section
 * ---------------------------------------------------------------
 * Language lines for the extension installation section.
 */
$lang['admin_install_error_com'] = 'Встановлення не вдалося: %s';
$lang['admin_install_location_app'] = 'Лише цей застосунок';
$lang['admin_install_location_core'] = 'Усі застосунки';
$lang['admin_install_location_select'] = '&#151; Виберіть розташування &#151;';
$lang['admin_install_update_confirm'] = 'Ви впевнені, що хочете оновити цей пакет?';
$lang['admin_install_update_error'] = 'Не вдалося оновити пакет.';
$lang['admin_install_update_skip_confirm'] = 'Ви впевнені, що хочете пропустити це оновлення?';
$lang['admin_install_update_skip_error'] = 'Не вдалося пропустити це оновлення.';
$lang['admin_install_update_skip_success'] = 'Оновлення успішно пропущено.';
$lang['admin_install_update_success'] = 'Пакет успішно оновлено.';
$lang['admin_install_upload_tip'] = 'Встановіть пакет, завантаживши тут його файл <b>.zip</b>.';

/**
 * ---------------------------------------------------------------
 * Database & Backup Section
 * ---------------------------------------------------------------
 * Language lines for the database management section.
 */
$lang['admin_database_backup_clean_error'] = 'Не вдалося очистити старі файли резервних копій.';
$lang['admin_database_backup_clean_success'] = '%d файлів резервних копій видалено. %d дискового простору звільнено.';
$lang['admin_database_backup_create'] = 'Створити резервну копію';
$lang['admin_database_backup_create_confirm'] = 'Ви впевнені, що хочете створити резервну копію зараз?';
$lang['admin_database_backup_create_error'] = 'Не вдалося створити файл резервної копії. Переконайтеся, що папка <b>%s</b> доступна для запису.';
$lang['admin_database_backup_create_success'] = 'Файл резервної копії бази даних <b>%s</b> успішно створено.';
$lang['admin_database_backup_delete_confirm'] = 'Ви впевнені, що хочете видалити ці файли резервних копій?';
$lang['admin_database_backup_delete_error'] = 'Не вдалося видалити вибрані файли резервних копій.';
$lang['admin_database_backup_delete_success'] = 'Файли резервних копій успішно видалено.';
$lang['admin_database_backup_download_error'] = 'Не вдалося завантажити вибраний файл резервної копії.';
$lang['admin_database_backup_download_success'] = 'Файл резервної копії успішно завантажено.';
$lang['admin_database_backup_lock_confirm'] = 'Ви впевнені, що хочете заблокувати ці файли резервних копій?';
$lang['admin_database_backup_lock_error'] = 'Не вдалося заблокувати вибрані файли резервних копій.';
$lang['admin_database_backup_lock_success'] = 'Файли резервних копій успішно заблоковано.';
$lang['admin_database_backup_locked_error'] = 'Не вдалося видалити заблоковані файли резервних копій.';
$lang['admin_database_backup_missing_error'] = 'Файл резервної копії не знайдено.';
$lang['admin_database_backup_unlock_confirm'] = 'Ви впевнені, що хочете розблокувати ці файли резервних копій?';
$lang['admin_database_backup_unlock_error'] = 'Не вдалося розблокувати вибрані файли резервних копій.';
$lang['admin_database_backup_unlock_success'] = 'Файли резервних копій успішно розблоковано.';
$lang['admin_database_prune'] = 'Очистити';
$lang['admin_database_prune_confirm'] = 'Ви впевнені, що хочете очистити базу даних? Резервну копію буде створено перед виконанням.';
$lang['admin_database_prune_error'] = 'Не вдалося очистити базу даних.';
$lang['admin_database_prune_next'] = 'Наступна очистка: <b>%s</b>';
$lang['admin_database_prune_success'] = 'Базу даних успішно очищено.';

/**
 * ---------------------------------------------------------------
 * System Logs Section
 * ---------------------------------------------------------------
 * Language lines for the system logs section.
 */
$lang['admin_logs_delete'] = 'Видалити журнали';
$lang['admin_logs_delete_confirm'] = 'Ви впевнені, що хочете видалити вибрані файли журналів?';
$lang['admin_logs_delete_error'] = 'Не вдалося видалити файли журналів.';
$lang['admin_logs_delete_success'] = 'Файли журналів успішно видалено.';
$lang['admin_logs_error_disabled'] = 'Журналювання зараз не увімкнено.';
$lang['admin_logs_error_empty'] = 'Журналів не знайдено.';
$lang['admin_logs_error_missing'] = 'Або файл журналу не знайдено, або він був порожнім.';
$lang['admin_logs_tip'] = 'Журналювання може швидко створювати дуже великі файли. Для робочих сайтів, подумайте про видалення старих.';

/**
 * ---------------------------------------------------------------
 * Emails Section
 * ---------------------------------------------------------------
 * Language lines for the mail queue section.
 */
$lang['admin_emails_delete_confirm'] = 'Ви впевнені, що хочете видалити вибрані email?';
$lang['admin_emails_delete_error'] = 'Не вдалося видалити вибрані email.';
$lang['admin_emails_delete_success'] = 'Вибрані email успішно видалено.';
$lang['admin_emails_email_from'] = 'Надіслано від';
$lang['admin_emails_mail_queue'] = 'Черга пошти';
$lang['admin_emails_mailer'] = 'Масова розсилка';
$lang['admin_emails_search'] = 'Пошук листів за темою або вмістом...';
$lang['admin_emails_send_error'] = 'Не вдалося поставити email в чергу. Будь ласка, спробуйте ще раз.';
$lang['admin_emails_send_none'] = 'Немає користувачів, що відповідають вашим критеріям.';
$lang['admin_emails_send_success'] = 'Email поставлено в чергу і буде надіслано найближчим часом.';
$lang['admin_emails_send_to_banned'] = 'Надіслати заблокованим користувачам.';
$lang['admin_emails_send_to_deleted'] = 'Надіслати видаленим користувачам.';
$lang['admin_emails_send_to_disabled'] = 'Надіслати неактивним користувачам.';

/**
 * ---------------------------------------------------------------
 * Users Section
 * ---------------------------------------------------------------
 * Language lines for the users management section.
 */
$lang['admin_users_add'] = 'Додати користувача';
$lang['admin_users_all_users'] = 'Всі користувачі';
$lang['admin_users_ban_confirm'] = 'Ви впевнені, що хочете заблокувати вибраних користувачів?';
$lang['admin_users_ban_error'] = 'Не вдалося заблокувати вибраних користувачів.';
$lang['admin_users_ban_success'] = 'Вибраних користувачів успішно заблоковано.';
$lang['admin_users_delete_confirm'] = 'Ви впевнені, що хочете видалити вибраних користувачів?';
$lang['admin_users_delete_error'] = 'Не вдалося видалити вибраних користувачів.';
$lang['admin_users_delete_success'] = 'Вибраних користувачів успішно видалено.';
$lang['admin_users_disable_confirm'] = 'Ви впевнені, що хочете вимкнути вибраних користувачів?';
$lang['admin_users_disable_error'] = 'Не вдалося вимкнути вибраних користувачів.';
$lang['admin_users_disable_success'] = 'Вибраних користувачів успішно вимкнено.';
$lang['admin_users_edit'] = 'Редагувати користувача';
$lang['admin_users_edit_error'] = 'Не вдалося оновити користувача.';
$lang['admin_users_edit_success'] = 'Користувача успішно оновлено.';
$lang['admin_users_enable_confirm'] = 'Ви впевнені, що хочете увімкнути вибраних користувачів?';
$lang['admin_users_enable_error'] = 'Не вдалося увімкнути вибраних користувачів.';
$lang['admin_users_enable_success'] = 'Вибраних користувачів успішно увімкнено.';
$lang['admin_users_groups'] = 'Групи';
$lang['admin_users_lock_confirm'] = 'Ви впевнені, що хочете заблокувати вибраних користувачів?';
$lang['admin_users_lock_error'] = 'Не вдалося заблокувати вибраних користувачів.';
$lang['admin_users_lock_success'] = 'Вибраних користувачів успішно заблоковано.';
$lang['admin_users_logged'] = 'Користувачі, що увійшли в систему';
$lang['admin_users_manage'] = 'Керувати користувачами';
$lang['admin_users_remove_confirm'] = 'Ви впевнені, що хочете назавжди видалити вибраних користувачів та всі їхні дані?';
$lang['admin_users_remove_error'] = 'Не вдалося назавжди видалити вибраних користувачів та всі їхні дані.';
$lang['admin_users_remove_success'] = 'Вибраних користувачів та всі їхні дані успішно видалено.';
$lang['admin_users_restore_confirm'] = 'Ви впевнені, що хочете відновити вибраних користувачів?';
$lang['admin_users_restore_error'] = 'Не вдалося відновити вибраних користувачів.';
$lang['admin_users_restore_success'] = 'Вибраних користувачів успішно відновлено.';
$lang['admin_users_search'] = 'Пошук за іменем, іменем користувача або email...';
$lang['admin_users_unban_confirm'] = 'Ви впевнені, що хочете розблокувати вибраних користувачів?';
$lang['admin_users_unban_error'] = 'Не вдалося розблокувати вибраних користувачів.';
$lang['admin_users_unban_success'] = 'Вибраних користувачів успішно розблоковано.';
$lang['admin_users_unlock_confirm'] = 'Ви впевнені, що хочете розблокувати вибраних користувачів?';
$lang['admin_users_unlock_error'] = 'Не вдалося розблокувати вибраних користувачів.';
$lang['admin_users_unlock_success'] = 'Вибраних користувачів успішно розблоковано.';

/**
 * ---------------------------------------------------------------
 * Reports Section
 * ---------------------------------------------------------------
 * Language lines for the activity log section.
 */
$lang['admin_reports_clear'] = 'Очистити журнали';
$lang['admin_reports_clear_confirm'] = 'Ви впевнені, що хочете очистити журнал дій?';
$lang['admin_reports_clear_error'] = 'Не вдалося очистити журнал дій.';
$lang['admin_reports_clear_success'] = 'Журнал дій успішно очищено.';
$lang['admin_reports_latest_actions'] = 'Останні дії';

/**
 * ---------------------------------------------------------------
 * Media Library Section
 * ---------------------------------------------------------------
 * Language lines for the media library section.
 */
$lang['admin_media_delete_confirm'] = 'Ви впевнені, що хочете видалити вибрані файли?';
$lang['admin_media_delete_error'] = 'Не вдалося видалити файли.';
$lang['admin_media_delete_success'] = 'Файли успішно видалено.';
$lang['admin_media_file_delete_error'] = 'Не вдалося видалити файл.';
$lang['admin_media_file_delete_success'] = 'Файл успішно видалено.';
$lang['admin_media_file_update_error'] = 'Не вдалося оновити файл.';
$lang['admin_media_file_update_success'] = 'Файл успішно оновлено.';
$lang['admin_media_search'] = 'Пошук за назвою, описом або ім’ям файлу...';

/**
 * ---------------------------------------------------------------
 * Modules Section
 * ---------------------------------------------------------------
 * Language lines for modules management section.
 */
$lang['admin_modules_active_count'] = '=0{Немає активних модулів.} other{<b>#</b> з <b>%s</b> модулів активні.}';
$lang['admin_modules_add'] = 'Додати модуль';
$lang['admin_modules_delete_confirm'] = 'Ви впевнені, що хочете видалити модуль: <b>%s</b>?';
$lang['admin_modules_delete_error'] = 'Не вдалося видалити модуль.';
$lang['admin_modules_delete_error_active'] = 'Активні модулі не можна видалити.';
$lang['admin_modules_delete_success'] = 'Модуль успішно видалено.';
$lang['admin_modules_disable_all_confirm'] = 'Ви впевнені, що хочете вимкнути всі модулі?';
$lang['admin_modules_disable_all_error'] = 'Не вдалося вимкнути всі модулі.';
$lang['admin_modules_disable_all_success'] = 'Всі модулі успішно вимкнено.';
$lang['admin_modules_disable_confirm'] = 'Ви впевнені, що хочете вимкнути модуль: <b>%s</b>?';
$lang['admin_modules_disable_error'] = 'Не вдалося деактивувати модуль.';
$lang['admin_modules_disable_success'] = 'Модуль успішно деактивовано.';
$lang['admin_modules_enable_all_confirm'] = 'Ви впевнені, що хочете увімкнути всі модулі?';
$lang['admin_modules_enable_all_error'] = 'Не вдалося увімкнути всі модулі.';
$lang['admin_modules_enable_all_success'] = 'Всі модулі успішно увімкнено.';
$lang['admin_modules_enable_confirm'] = 'Ви впевнені, що хочете увімкнути модуль: <b>%s</b>?';
$lang['admin_modules_enable_error'] = 'Не вдалося активувати модуль.';
$lang['admin_modules_enable_success'] = 'Модуль успішно активовано.';
$lang['admin_modules_global'] = 'Глобальний модуль (спільний)';
$lang['admin_modules_install_confirm'] = 'Ви впевнені, що хочете встановити модуль: <b>%s</b>?';
$lang['admin_modules_install_error'] = 'Не вдалося встановити модуль.';
$lang['admin_modules_install_success'] = 'Модуль успішно встановлено.';
$lang['admin_modules_install_tip'] = 'Модулі додають нові функції та можливості вашому сайту. Перегляйте доступні модулі в <a href="%s" target="_blank" rel="noopener">каталозі модулів</a> або завантажте один як <b>.zip</b> пакет.';
$lang['admin_modules_update_confirm'] = 'Ви впевнені, що хочете оновити цей модуль?';
$lang['admin_modules_update_error'] = 'Не вдалося оновити модуль.';
$lang['admin_modules_update_success'] = 'Модуль успішно оновлено.';

/**
 * ---------------------------------------------------------------
 * Plugins Section
 * ---------------------------------------------------------------
 * Language lines for plugins management section.
 */
$lang['admin_plugins_active_count'] = '=0{Немає активних плагінів.} other{<b>#</b> з <b>%s</b> плагінів активні.}';
$lang['admin_plugins_add'] = 'Додати плагін';
$lang['admin_plugins_delete_confirm'] = 'Ви впевнені, що хочете видалити плагін: <b>%s</b>?';
$lang['admin_plugins_delete_error'] = 'Не вдалося видалити плагін.';
$lang['admin_plugins_delete_error_active'] = 'Активні плагіни не можна видалити.';
$lang['admin_plugins_delete_success'] = 'Плагін успішно видалено.';
$lang['admin_plugins_disable_all_confirm'] = 'Ви впевнені, що хочете вимкнути всі плагіни?';
$lang['admin_plugins_disable_all_error'] = 'Не вдалося вимкнути всі плагіни.';
$lang['admin_plugins_disable_all_success'] = 'Всі плагіни успішно вимкнено.';
$lang['admin_plugins_disable_confirm'] = 'Ви впевнені, що хочете вимкнути плагін: <b>%s</b>?';
$lang['admin_plugins_disable_error'] = 'Не вдалося деактивувати плагін.';
$lang['admin_plugins_disable_success'] = 'Плагін успішно деактивовано.';
$lang['admin_plugins_enable_all_confirm'] = 'Ви впевнені, що хочете увімкнути всі плагіни?';
$lang['admin_plugins_enable_all_error'] = 'Не вдалося увімкнути всі плагіни.';
$lang['admin_plugins_enable_all_success'] = 'Всі плагіни успішно увімкнено.';
$lang['admin_plugins_enable_confirm'] = 'Ви впевнені, що хочете увімкнути плагін: <b>%s</b>?';
$lang['admin_plugins_enable_error'] = 'Не вдалося активувати плагін.';
$lang['admin_plugins_enable_success'] = 'Плагін успішно активовано.';
$lang['admin_plugins_global'] = 'Глобальний плагін (спільний)';
$lang['admin_plugins_install_confirm'] = 'Ви впевнені, що хочете встановити плагін: <b>%s</b>?';
$lang['admin_plugins_install_error'] = 'Не вдалося встановити плагін.';
$lang['admin_plugins_install_success'] = 'Плагін успішно встановлено.';
$lang['admin_plugins_install_tip'] = 'Плагіни розширюють існуючі функції додатковими опціями або інтеграціями. Встановлюйте з <a href="%s" target="_blank" rel="noopener">каталогу плагінів</a> або завантажте <b>.zip</b> файл.';
$lang['admin_plugins_update_confirm'] = 'Ви впевнені, що хочете оновити цей плагін?';
$lang['admin_plugins_update_error'] = 'Не вдалося оновити плагін.';
$lang['admin_plugins_update_success'] = 'Плагін успішно оновлено.';

/**
 * ---------------------------------------------------------------
 * Themes Section
 * ---------------------------------------------------------------
 * Language lines for themes management section.
 */
$lang['admin_themes_add'] = 'Додати тему';
$lang['admin_themes_delete_confirm'] = 'Ви впевнені, що хочете видалити тему: <b>%s</b>?';
$lang['admin_themes_delete_error'] = 'Не вдалося видалити тему.';
$lang['admin_themes_delete_error_active'] = 'Ви не можете видалити поточно активну тему.';
$lang['admin_themes_delete_success'] = 'Тема успішно видалено.';
$lang['admin_themes_disable_confirm'] = 'Ви впевнені, що хочете деактивувати тему: <b>%s</b>?';
$lang['admin_themes_disable_error'] = 'Не вдалося деактивувати тему.';
$lang['admin_themes_disable_error_active'] = 'Активну тему не можна вимкнути.';
$lang['admin_themes_disable_success'] = 'Тему успішно деактивовано.';
$lang['admin_themes_enable_confirm'] = 'Ви впевнені, що хочете увімкнути тему: <b>%s</b>?';
$lang['admin_themes_enable_error'] = 'Не вдалося активувати тему.';
$lang['admin_themes_enable_success'] = 'Тема успішно активована.';
$lang['admin_themes_install_confirm'] = 'Ви впевнені, що хочете встановити тему: <b>%s</b>?';
$lang['admin_themes_install_error'] = 'Не вдалося встановити тему.';
$lang['admin_themes_install_success'] = 'Тему успішно встановлено.';
$lang['admin_themes_install_tip'] = 'Теми змінюють вигляд та макет вашого сайту. Виберіть з <a href="%s" target="_blank" rel="noopener">бібліотеки тем</a> або завантажте <b>.zip</b> файл для встановлення власної.';
$lang['admin_themes_none_tip'] = 'Цей застосунок працює без теми. Установіть тему, щоб налаштувати публічний інтерфейс.';
$lang['admin_themes_update_confirm'] = 'Ви впевнені, що хочете оновити цю тему?';
$lang['admin_themes_update_error'] = 'Не вдалося оновити тему.';
$lang['admin_themes_update_success'] = 'Тему успішно оновлено.';

/**
 * ---------------------------------------------------------------
 * Menus Section
 * ---------------------------------------------------------------
 * Language lines for menu locations section.
 */
$lang['admin_menus'] = 'Меню';
$lang['admin_menus_assign_error'] = 'Не вдалося оновити розташування меню.';
$lang['admin_menus_assign_success'] = 'Розташування меню успішно оновлено.';
$lang['admin_menus_header'] = 'Є <b>%s</b> доступних місць меню.';
$lang['admin_menus_location'] = 'Розташування';
$lang['admin_menus_locations'] = 'Розташування меню';
$lang['admin_menus_manage'] = 'Керувати меню';
$lang['admin_menus_menu'] = 'Призначене меню';
$lang['admin_menus_none'] = '&#151; Немає &#151;';

/**
 * ---------------------------------------------------------------
 * Languages Section
 * ---------------------------------------------------------------
 * Language lines for languages management section.
 */
$lang['admin_languages_add'] = 'Додати мову';
$lang['admin_languages_default_confirm'] = 'Ви впевнені, що хочете зробити цю мову мовою сайту за замовчуванням?';
$lang['admin_languages_default_error'] = 'Не вдалося змінити мову за замовчуванням.';
$lang['admin_languages_default_error_nochange'] = 'Ця мова вже є мовою за замовчуванням.';
$lang['admin_languages_default_success'] = 'Мову за замовчуванням успішно змінено.';
$lang['admin_languages_delete_confirm'] = 'Ви впевнені, що хочете видалити мову: <b>%s</b>?';
$lang['admin_languages_delete_error'] = 'Не вдалося видалити мову.';
$lang['admin_languages_delete_error_active'] = 'Активні мови не можна видалити.';
$lang['admin_languages_delete_error_default'] = 'Мову за замовчуванням не можна видалити.';
$lang['admin_languages_delete_success'] = 'Мову успішно видалено.';
$lang['admin_languages_disable_all_confirm'] = 'Ви впевнені, що хочете вимкнути всі мови?';
$lang['admin_languages_disable_all_error'] = 'Не вдалося вимкнути всі мови.';
$lang['admin_languages_disable_all_success'] = 'Всі мови успішно вимкнено.';
$lang['admin_languages_disable_confirm'] = 'Ви впевнені, що хочете вимкнути мову: <b>%s</b>?';
$lang['admin_languages_disable_error'] = 'Не вдалося вимкнути мову.';
$lang['admin_languages_disable_error_default'] = 'Мову за замовчуванням не можна вимкнути.';
$lang['admin_languages_disable_error_nochange'] = 'Ця мова вже вимкнена.';
$lang['admin_languages_disable_success'] = 'Мову успішно вимкнено.';
$lang['admin_languages_enable_all_confirm'] = 'Ви впевнені, що хочете увімкнути всі мови?';
$lang['admin_languages_enable_all_error'] = 'Не вдалося увімкнути всі мови.';
$lang['admin_languages_enable_all_success'] = 'Всі мови успішно увімкнено.';
$lang['admin_languages_enable_confirm'] = 'Ви впевнені, що хочете увімкнути мову: <b>%s</b>?';
$lang['admin_languages_enable_error'] = 'Не вдалося увімкнути мову.';
$lang['admin_languages_enable_error_nochange'] = 'Ця мова вже увімкнена.';
$lang['admin_languages_enable_success'] = 'Мову успішно увімкнено.';
$lang['admin_languages_install_confirm'] = 'Ви впевнені, що хочете встановити мову: <b>%s</b>?';
$lang['admin_languages_install_error'] = 'Не вдалося встановити мову.';
$lang['admin_languages_install_success'] = 'Мову успішно встановлено.';
$lang['admin_languages_install_tip'] = 'Мови додають переклади для інтерфейсу та вмісту вашого сайту. Перегляньте доступні мови в <a href="%s" target="_blank" rel="noopener">каталозі мов</a> або завантажте пакет <b>.zip</b>, щоб встановити власну.';
$lang['admin_languages_tip'] = 'Увімкніть, вимкніть та встановіть мову сайту за замовчуванням. Увімкнені мови доступні для відвідувачів сайту.';
$lang['admin_languages_update_confirm'] = 'Ви впевнені, що хочете оновити цю мову?';
$lang['admin_languages_update_error'] = 'Не вдалося оновити мову.';
$lang['admin_languages_update_success'] = 'Мову успішно оновлено.';

/**
 * ---------------------------------------------------------------
 * Package Driver & Installation Messages
 * ---------------------------------------------------------------
 * Language lines for package installation, download, backup, and validation.
 */
$lang['package_already_exists'] = 'Пакет уже існує.';
$lang['package_archive_download_failed'] = 'Не вдалося завантажити архів пакету.';
$lang['package_backup_create_error'] = 'Не вдалося створити резервну копію пакета.';
$lang['package_backup_dir_failed'] = 'Не вдалося створити каталог резервної копії %s';
$lang['package_backup_missing'] = 'Файл резервної копії не існує.';
$lang['package_backup_path_error'] = 'Не вдалося визначити шлях до файлу резервної копії.';
$lang['package_backup_request_invalid'] = 'Недійсний запит резервної копії.';
$lang['package_backup_restore_error'] = 'Не вдалося відновити резервну копію пакета.';
$lang['package_catalog_type_unknown'] = 'Невідомий тип каталогу.';
$lang['package_checksum_error'] = 'Перевірка контрольної суми (checksum) пакета не вдалася.';
$lang['package_copy_files_error'] = 'Не вдалося скопіювати файли пакета до призначення.';
$lang['package_copy_updates_error'] = 'Не вдалося скопіювати файли оновлення до призначення.';
$lang['package_dest_dir_failed'] = 'Не вдалося створити цільовий каталог %s';
$lang['package_destination_error'] = 'Не вдалося визначити шлях призначення пакета.';
$lang['package_download_dir_failed'] = 'Не вдалося створити каталог скачування %s';
$lang['package_download_empty'] = 'Завантаження пакета повернуло порожню відповідь.';
$lang['package_download_request_invalid'] = 'Недійсний запит завантаження пакета.';
$lang['package_extract_failed'] = 'Не вдалося розпакувати ZIP %s';
$lang['package_invalid_lang_files'] = 'Недійсна мова — відсутні обов’язкові мовні файли програми.';
$lang['package_invalid_lang_structure'] = 'Недійсна мова — відсутні каталоги admin та/або ci3.';
$lang['package_invalid_missing_info'] = 'Недійсний %s: відсутній "info.php".';
$lang['package_invalid_module_structure'] = 'Недійсний модуль — відсутні обов’язкові каталоги config та/або controllers.';
$lang['package_invalid_plugin_boot'] = 'Недійсний плагін — відсутній "boot.php".';
$lang['package_invalid_plugin_contents'] = 'Недійсний плагін — плагіни не можуть містити контролери або подання (views).';
$lang['package_invalid_theme_boot'] = 'Недійсна тема — відсутній "boot.php".';
$lang['package_invalid_theme_views'] = 'Недійсна тема — відсутній каталог views.';
$lang['package_no_root_dir'] = 'Пакет не містить кореневого каталогу.';
$lang['package_not_downloadable'] = 'Пакет недоступний для публічного завантаження.';
$lang['package_not_in_registry'] = 'Пакет недоступний у публічному реєстрі.';
$lang['package_request_invalid'] = 'Недійсний запит пакета.';
$lang['package_rollback_request_invalid'] = 'Недійсний запит відкату (rollback).';
$lang['package_root_mismatch'] = 'Кореневий каталог архіву пакету не відповідає %s';
$lang['package_single_root_required'] = 'Пакет повинен містити рівно один кореневий каталог.';
$lang['package_source_error'] = 'Не вдалося визначити джерело пакета.';
$lang['package_system_core_restricted'] = 'Системні компоненти не можна встановлювати як пакети.';
$lang['package_temp_dir_failed'] = 'Не вдалося створити тимчасовий каталог %s';
$lang['package_type_unknown'] = 'Невідомий тип пакета.';
$lang['package_update_request_invalid'] = 'Недійсний запит оновлення пакета.';
$lang['package_update_root_mismatch'] = 'Кореневий каталог архіву оновлення не відповідає %s.';
$lang['package_upload_dir_failed'] = 'Не вдалося створити каталог завантаження %s';
$lang['package_url_invalid'] = 'Недійсний URL розповсюдження пакета.';
$lang['package_write_failed'] = 'Не вдалося записати пакет у %s';
$lang['package_zip_not_found'] = 'ZIP-пакет не існує: %s';

/**
 * ---------------------------------------------------------------
 * Updates Section
 * ---------------------------------------------------------------
 * Language lines for updates section.
 */
$lang['update_available'] = 'Доступні нові оновлення!';
$lang['update_backup_error'] = 'Не вдалося створити резервну копію існуючого пакета. Оновлення було перервано.';
$lang['update_check_disabled'] = 'Автоматична перевірка оновлень вимкнена. Увімкніть її для перегляду оновлень.';
$lang['update_check_error'] = 'Не вдається виконати перевірку оновлень у цей момент.';
$lang['update_check_success'] = 'Перевірка оновлень успішно завершена.';
$lang['update_install_error'] = 'Не вдалося встановити пакет. Попередню версію було збережено.';
$lang['update_install_success'] = 'Пакет успішно оновлено до найновішої версії.';
$lang['update_interval_3days'] = 'Кожні 3 дні';
$lang['update_interval_biweekly'] = 'Кожні 2 тижні';
$lang['update_interval_daily'] = 'Щодня';
$lang['update_interval_monthly'] = 'Раз на місяць';
$lang['update_interval_weekly'] = 'Раз на тиждень';
$lang['update_not_available'] = 'Ваш веб-сайт оновлено.';
$lang['update_rollback_confirm'] = 'Ви впевнені, що хочете відновити попередню версію?';
$lang['update_rollback_error'] = 'Не вдалося відновити попередню версію. Може знадобитися ручне втручання.';
$lang['update_rollback_success'] = 'Попередню версію успішно відновлено.';
$lang['updates_available'] = 'Доступні оновлення';
$lang['updates_check_now'] = 'Перевірити зараз';
$lang['updates_check_now_confirm'] = 'Ви впевнені, що хочете перевірити оновлення зараз?';
$lang['updates_current_version'] = 'Поточна версія';
$lang['updates_enable'] = 'Увімкнути оновлення';
$lang['updates_last_check'] = 'Остання перевірка: %s';
$lang['updates_latest_version'] = 'Найновіша версія';
$lang['updates_next_check'] = 'Наступна заплановована перевірка: %s';
$lang['updates_previous_version'] = 'Попередня версія';
$lang['updates_recent'] = 'Нещодавно оновлено';

/**
 * ---------------------------------------------------------------
 * Firewall Section
 * ---------------------------------------------------------------
 * Language lines for the system firewall section.
 */
$lang['admin_firewall_ban_error'] = 'Не вдалося заблокувати вказану IP-адресу.';
$lang['admin_firewall_ban_success'] = 'IP-адресу успішно заблоковано.';
$lang['admin_firewall_block_ip'] = 'Заблокувати IP-адресу';
$lang['admin_firewall_delete_confirm'] = 'Ви впевнені, що хочете розблокувати обрані IP-адреси?';
$lang['admin_firewall_delete_error'] = 'Не вдалося розблокувати обрані IP-адреси.';
$lang['admin_firewall_delete_success'] = 'Обрані IP-адреси успішно розблоковано.';
$lang['admin_firewall_duration'] = 'Тривалість блокування';
$lang['admin_firewall_permanent'] = 'Постійне';
$lang['admin_firewall_reason'] = 'Причина блокування';
$lang['admin_firewall_tip'] = 'Перегляд та керування IP-адресами, заблокованими брандмауером через повторювані порушення або підозрілу активність.';

// Settings
$lang['404_ban_duration'] = 'Тривалість блокування 404';
$lang['404_threshold'] = 'Ліміт помилок 404';
$lang['uri_ban_duration'] = 'Тривалість блокування URI';
$lang['uri_strike_threshold'] = 'Ліміт URI';
