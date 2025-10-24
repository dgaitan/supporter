<?php

namespace App\Enums;

/**
 * Heroicon Enum
 * 
 * Contains all available Heroicons from https://heroicons.com/
 * These icons are available in three styles: Outline, Solid, and Mini
 * 
 * @method static string getLabel(string $value)
 * @method static array getOptions()
 */
enum Heroicon: string
{
    // Academic & Education
    case ACADEMIC_CAP = 'academic-cap';
    case BOOK_OPEN = 'book-open';
    case BOOKMARK = 'bookmark';
    case BOOKMARK_SLASH = 'bookmark-slash';
    case BOOKMARK_SQUARE = 'bookmark-square';
    case BUILDING_LIBRARY = 'building-library';

    // Actions & Navigation
    case ARROW_DOWN = 'arrow-down';
    case ARROW_DOWN_CIRCLE = 'arrow-down-circle';
    case ARROW_DOWN_LEFT = 'arrow-down-left';
    case ARROW_DOWN_ON_SQUARE = 'arrow-down-on-square';
    case ARROW_DOWN_ON_SQUARE_STACK = 'arrow-down-on-square-stack';
    case ARROW_DOWN_RIGHT = 'arrow-down-right';
    case ARROW_DOWN_TRAY = 'arrow-down-tray';
    case ARROW_LEFT = 'arrow-left';
    case ARROW_LEFT_CIRCLE = 'arrow-left-circle';
    case ARROW_LEFT_END_ON_RECTANGLE = 'arrow-left-end-on-rectangle';
    case ARROW_LEFT_START_ON_RECTANGLE = 'arrow-left-start-on-rectangle';
    case ARROW_RIGHT = 'arrow-right';
    case ARROW_RIGHT_CIRCLE = 'arrow-right-circle';
    case ARROW_RIGHT_END_ON_RECTANGLE = 'arrow-right-end-on-rectangle';
    case ARROW_RIGHT_START_ON_RECTANGLE = 'arrow-right-start-on-rectangle';
    case ARROW_TOP_RIGHT_ON_SQUARE = 'arrow-top-right-on-square';
    case ARROW_UP = 'arrow-up';
    case ARROW_UP_CIRCLE = 'arrow-up-circle';
    case ARROW_UP_LEFT = 'arrow-up-left';
    case ARROW_UP_ON_SQUARE = 'arrow-up-on-square';
    case ARROW_UP_ON_SQUARE_STACK = 'arrow-up-on-square-stack';
    case ARROW_UP_RIGHT = 'arrow-up-right';
    case ARROW_UP_TRAY = 'arrow-up-tray';
    case ARROW_UTURN_DOWN = 'arrow-uturn-down';
    case ARROW_UTURN_LEFT = 'arrow-uturn-left';
    case ARROW_UTURN_RIGHT = 'arrow-uturn-right';
    case ARROW_UTURN_UP = 'arrow-uturn-up';

    // Arrows & Direction
    case ARROW_LONG_DOWN = 'arrow-long-down';
    case ARROW_LONG_LEFT = 'arrow-long-left';
    case ARROW_LONG_RIGHT = 'arrow-long-right';
    case ARROW_LONG_UP = 'arrow-long-up';
    case ARROW_PATH = 'arrow-path';
    case ARROW_PATH_ROUNDED_SQUARE = 'arrow-path-rounded-square';
    case ARROW_TRENDING_DOWN = 'arrow-trending-down';
    case ARROW_TRENDING_UP = 'arrow-trending-up';
    case ARROW_TURN_DOWN_LEFT = 'arrow-turn-down-left';
    case ARROW_TURN_DOWN_RIGHT = 'arrow-turn-down-right';
    case ARROW_TURN_LEFT_DOWN = 'arrow-turn-left-down';
    case ARROW_TURN_LEFT_UP = 'arrow-turn-left-up';
    case ARROW_TURN_RIGHT_DOWN = 'arrow-turn-right-down';
    case ARROW_TURN_RIGHT_UP = 'arrow-turn-right-up';
    case ARROW_TURN_UP_LEFT = 'arrow-turn-up-left';
    case ARROW_TURN_UP_RIGHT = 'arrow-turn-up-right';
    case ARROWS_POINTING_IN = 'arrows-pointing-in';
    case ARROWS_POINTING_OUT = 'arrows-pointing-out';
    case ARROWS_RIGHT_LEFT = 'arrows-right-left';
    case ARROWS_UP_DOWN = 'arrows-up-down';

    // Bars & Navigation
    case BARS_2 = 'bars-2';
    case BARS_3 = 'bars-3';
    case BARS_3_BOTTOM_LEFT = 'bars-3-bottom-left';
    case BARS_3_BOTTOM_RIGHT = 'bars-3-bottom-right';
    case BARS_3_CENTER_LEFT = 'bars-3-center-left';
    case BARS_4 = 'bars-4';
    case BARS_ARROW_DOWN = 'bars-arrow-down';
    case BARS_ARROW_UP = 'bars-arrow-up';

    // Battery & Power
    case BATTERY_0 = 'battery-0';
    case BATTERY_50 = 'battery-50';
    case BATTERY_100 = 'battery-100';

    // Business & Office
    case BRIEFCASE = 'briefcase';
    case BUILDING_OFFICE = 'building-office';
    case BUILDING_OFFICE_2 = 'building-office-2';
    case BUILDING_STOREFRONT = 'building-storefront';
    case CREDIT_CARD = 'credit-card';
    case CURRENCY_BANGALDESHI = 'currency-bangladeshi';
    case CURRENCY_DOLLAR = 'currency-dollar';
    case CURRENCY_EURO = 'currency-euro';
    case CURRENCY_POUND = 'currency-pound';
    case CURRENCY_RUPEE = 'currency-rupee';
    case CURRENCY_YEN = 'currency-yen';
    case RECEIPT_PERCENT = 'receipt-percent';
    case RECEIPT_REFUND = 'receipt-refund';

    // Communication
    case AT_SYMBOL = 'at-symbol';
    case CHAT_BUBBLE_BOTTOM_CENTER = 'chat-bubble-bottom-center';
    case CHAT_BUBBLE_BOTTOM_CENTER_TEXT = 'chat-bubble-bottom-center-text';
    case CHAT_BUBBLE_LEFT = 'chat-bubble-left';
    case CHAT_BUBBLE_LEFT_ELLIPSIS = 'chat-bubble-left-ellipsis';
    case CHAT_BUBBLE_LEFT_RIGHT = 'chat-bubble-left-right';
    case CHAT_BUBBLE_OVAL_LEFT = 'chat-bubble-oval-left';
    case CHAT_BUBBLE_OVAL_LEFT_ELLIPSIS = 'chat-bubble-oval-left-ellipsis';
    case ENVELOPE = 'envelope';
    case ENVELOPE_OPEN = 'envelope-open';
    case MEGAPHONE = 'megaphone';
    case PHONE = 'phone';
    case PHONE_ARROW_DOWN_LEFT = 'phone-arrow-down-left';
    case PHONE_ARROW_UP_RIGHT = 'phone-arrow-up-right';
    case PHONE_X_MARK = 'phone-x-mark';

    // Computer & Technology
    case CPU_CHIP = 'cpu-chip';
    case COMPUTER_DESKTOP = 'computer-desktop';
    case DEVICE_PHONE_MOBILE = 'device-phone-mobile';
    case DEVICE_TABLET = 'device-tablet';
    case SERVER = 'server';
    case SERVER_STACK = 'server-stack';
    case TV = 'tv';
    case WIFI = 'wifi';
    case SIGNAL = 'signal';
    case SIGNAL_SLASH = 'signal-slash';

    // Content & Media
    case CAMERA = 'camera';
    case DOCUMENT = 'document';
    case DOCUMENT_ARROW_DOWN = 'document-arrow-down';
    case DOCUMENT_ARROW_UP = 'document-arrow-up';
    case DOCUMENT_CHART_BAR = 'document-chart-bar';
    case DOCUMENT_CHECK = 'document-check';
    case DOCUMENT_CURRENCY_BANGALDESHI = 'document-currency-bangladeshi';
    case DOCUMENT_CURRENCY_DOLLAR = 'document-currency-dollar';
    case DOCUMENT_CURRENCY_EURO = 'document-currency-euro';
    case DOCUMENT_CURRENCY_POUND = 'document-currency-pound';
    case DOCUMENT_CURRENCY_RUPEE = 'document-currency-rupee';
    case DOCUMENT_CURRENCY_YEN = 'document-currency-yen';
    case DOCUMENT_DUPLICATE = 'document-duplicate';
    case DOCUMENT_MAGNIFYING_GLASS = 'document-magnifying-glass';
    case DOCUMENT_MINUS = 'document-minus';
    case DOCUMENT_PLUS = 'document-plus';
    case DOCUMENT_TEXT = 'document-text';
    case FILM = 'film';
    case NEWSPAPER = 'newspaper';
    case PHOTO = 'photo';
    case VIDEO_CAMERA = 'video-camera';
    case VIDEO_CAMERA_SLASH = 'video-camera-slash';

    // Controls & Settings
    case ADJUSTMENTS_HORIZONTAL = 'adjustments-horizontal';
    case ADJUSTMENTS_VERTICAL = 'adjustments-vertical';
    case COG = 'cog';
    case COG_6_TOOTH = 'cog-6-tooth';
    case COG_8_TOOTH = 'cog-8-tooth';
    case WRENCH = 'wrench';
    case WRENCH_SCREWDRIVER = 'wrench-screwdriver';

    // Data & Analytics
    case CHART_BAR = 'chart-bar';
    case CHART_BAR_SQUARE = 'chart-bar-square';
    case CHART_PIE = 'chart-pie';
    case PRESENTATION_CHART_BAR = 'presentation-chart-bar';
    case PRESENTATION_CHART_LINE = 'presentation-chart-line';

    // Files & Folders
    case CLIPBOARD = 'clipboard';
    case CLIPBOARD_DOCUMENT = 'clipboard-document';
    case CLIPBOARD_DOCUMENT_CHECK = 'clipboard-document-check';
    case CLIPBOARD_DOCUMENT_LIST = 'clipboard-document-list';
    case FOLDER = 'folder';
    case FOLDER_ARROW_DOWN = 'folder-arrow-down';
    case FOLDER_MINUS = 'folder-minus';
    case FOLDER_OPEN = 'folder-open';
    case FOLDER_PLUS = 'folder-plus';

    // Forms & Input
    case CHECK = 'check';
    case CHECK_BADGE = 'check-badge';
    case CHECK_CIRCLE = 'check-circle';
    case EXCLAMATION_CIRCLE = 'exclamation-circle';
    case EXCLAMATION_TRIANGLE = 'exclamation-triangle';
    case INFORMATION_CIRCLE = 'information-circle';
    case MINUS = 'minus';
    case MINUS_CIRCLE = 'minus-circle';
    case NO_SYMBOL = 'no-symbol';
    case PLUS = 'plus';
    case PLUS_CIRCLE = 'plus-circle';
    case QUESTION_MARK_CIRCLE = 'question-mark-circle';
    case X_CIRCLE = 'x-circle';
    case X_MARK = 'x-mark';

    // Home & Location
    case HOME = 'home';
    case HOME_MODERN = 'home-modern';
    case MAP = 'map';
    case MAP_PIN = 'map-pin';

    // Interface Elements
    case ELLIPSIS_HORIZONTAL = 'ellipsis-horizontal';
    case ELLIPSIS_HORIZONTAL_CIRCLE = 'ellipsis-horizontal-circle';
    case ELLIPSIS_VERTICAL = 'ellipsis-vertical';
    case SQUARE_2_STACK = 'square-2-stack';
    case SQUARE_3_STACK_3D = 'square-3-stack-3d';
    case SQUARES_2X2 = 'squares-2x2';
    case SQUARES_PLUS = 'squares-plus';

    // Media & Playback
    case BACKWARD = 'backward';
    case FORWARD = 'forward';
    case MUSICAL_NOTE = 'musical-note';
    case PAUSE = 'pause';
    case PAUSE_CIRCLE = 'pause-circle';
    case PLAY = 'play';
    case PLAY_CIRCLE = 'play-circle';
    case PLAY_PAUSE = 'play-pause';
    case SPEAKER_WAVE = 'speaker-wave';
    case SPEAKER_X_MARK = 'speaker-x-mark';
    case STOP = 'stop';
    case STOP_CIRCLE = 'stop-circle';

    // Navigation & UI
    case CHEVRON_DOWN = 'chevron-down';
    case CHEVRON_DOUBLE_DOWN = 'chevron-double-down';
    case CHEVRON_DOUBLE_LEFT = 'chevron-double-left';
    case CHEVRON_DOUBLE_RIGHT = 'chevron-double-right';
    case CHEVRON_DOUBLE_UP = 'chevron-double-up';
    case CHEVRON_LEFT = 'chevron-left';
    case CHEVRON_RIGHT = 'chevron-right';
    case CHEVRON_UP = 'chevron-up';
    case CHEVRON_UP_DOWN = 'chevron-up-down';

    // Objects & Items
    case BANKNOTES = 'banknotes';
    case BOLT = 'bolt';
    case BOLT_SLASH = 'bolt-slash';
    case CAKE = 'cake';
    case CUBE = 'cube';
    case CUBE_TRANSPARENT = 'cube-transparent';
    case GIFT = 'gift';
    case GIFT_TOP = 'gift-top';
    case LIFEBUOY = 'lifebuoy';
    case LIGHT_BULB = 'light-bulb';
    case PUZZLE_PIECE = 'puzzle-piece';
    case ROCKET_LAUNCH = 'rocket-launch';
    case TROPHY = 'trophy';
    case TRUCK = 'truck';

    // People & Users
    case USER = 'user';
    case USER_CIRCLE = 'user-circle';
    case USER_GROUP = 'user-group';
    case USER_MINUS = 'user-minus';
    case USER_PLUS = 'user-plus';
    case USERS = 'users';

    // Security & Privacy
    case FINGER_PRINT = 'finger-print';
    case LOCK_CLOSED = 'lock-closed';
    case LOCK_OPEN = 'lock-open';
    case SHIELD_CHECK = 'shield-check';
    case SHIELD_EXCLAMATION = 'shield-exclamation';

    // Shopping & Commerce
    case SHOPPING_BAG = 'shopping-bag';
    case SHOPPING_CART = 'shopping-cart';

    // Social & Communication
    case FACE_FROWN = 'face-frown';
    case FACE_SMILE = 'face-smile';
    case HAND_RAISED = 'hand-raised';
    case HAND_THUMB_DOWN = 'hand-thumb-down';
    case HAND_THUMB_UP = 'hand-thumb-up';
    case HEART = 'heart';

    // Status & Indicators
    case BELL = 'bell';
    case BELL_ALERT = 'bell-alert';
    case BELL_SLASH = 'bell-slash';
    case BELL_SNOOZE = 'bell-snooze';
    case FIRE = 'fire';
    case SPARKLES = 'sparkles';

    // Text & Typography
    case BOLD = 'bold';
    case HASHTAG = 'hashtag';
    case H1 = 'h1';
    case H2 = 'h2';
    case H3 = 'h3';
    case ITALIC = 'italic';
    case LIST_BULLET = 'list-bullet';
    case NUMBERED_LIST = 'numbered-list';
    case STRIKETHROUGH = 'strikethrough';
    case UNDERLINE = 'underline';

    // Tools & Utilities
    case CALCULATOR = 'calculator';
    case CLOCK = 'clock';
    case COMMAND_LINE = 'command-line';
    case CURSOR_ARROW_RAYS = 'cursor-arrow-rays';
    case CURSOR_ARROW_RIPPLE = 'cursor-arrow-ripple';
    case EYE = 'eye';
    case EYE_DROPPER = 'eye-dropper';
    case EYE_SLASH = 'eye-slash';
    case MAGNIFYING_GLASS = 'magnifying-glass';
    case MAGNIFYING_GLASS_CIRCLE = 'magnifying-glass-circle';
    case MAGNIFYING_GLASS_MINUS = 'magnifying-glass-minus';
    case MAGNIFYING_GLASS_PLUS = 'magnifying-glass-plus';
    case PAINT_BRUSH = 'paint-brush';
    case PENCIL = 'pencil';
    case PENCIL_SQUARE = 'pencil-square';
    case SCISSORS = 'scissors';
    case SWATCH = 'swatch';

    // Weather & Nature
    case CLOUD = 'cloud';
    case CLOUD_ARROW_DOWN = 'cloud-arrow-down';
    case CLOUD_ARROW_UP = 'cloud-arrow-up';
    case MOON = 'moon';
    case SUN = 'sun';

    // Miscellaneous
    case ARCHIVE_BOX = 'archive-box';
    case ARCHIVE_BOX_ARROW_DOWN = 'archive-box-arrow-down';
    case ARCHIVE_BOX_X_MARK = 'archive-box-x-mark';
    case BACKSPACE = 'backspace';
    case BEAKER = 'beaker';
    case BUG_ANT = 'bug-ant';
    case CIRCLE_STACK = 'circle-stack';
    case CODE_BRACKET = 'code-bracket';
    case CODE_BRACKET_SQUARE = 'code-bracket-square';
    case DIVIDE = 'divide';
    case EQUALS = 'equals';
    case FUNNEL = 'funnel';
    case GIF = 'gif';
    case GLOBE_ALT = 'globe-alt';
    case GLOBE_AMERICAS = 'globe-americas';
    case GLOBE_ASIA_AUSTRALIA = 'globe-asia-australia';
    case GLOBE_EUROPE_AFRICA = 'globe-europe-africa';
    case IDENTIFICATION = 'identification';
    case INBOX = 'inbox';
    case INBOX_ARROW_DOWN = 'inbox-arrow-down';
    case INBOX_STACK = 'inbox-stack';
    case KEY = 'key';
    case LANGUAGE = 'language';
    case LINK = 'link';
    case LINK_SLASH = 'link-slash';
    case MICROPHONE = 'microphone';
    case PAPER_AIRPLANE = 'paper-airplane';
    case PAPER_CLIP = 'paper-clip';
    case PERCENT_BADGE = 'percent-badge';
    case POWER = 'power';
    case PRINTER = 'printer';
    case QR_CODE = 'qr-code';
    case QUEUE_LIST = 'queue-list';
    case RADIO = 'radio';
    case RECTANGLE_GROUP = 'rectangle-group';
    case RECTANGLE_STACK = 'rectangle-stack';
    case RSS = 'rss';
    case SCALE = 'scale';
    case SHARE = 'share';
    case SLASH = 'slash';
    case STAR = 'star';
    case TAG = 'tag';
    case TICKET = 'ticket';
    case TRASH = 'trash';
    case VARIABLE = 'variable';
    case VIEW_COLUMNS = 'view-columns';
    case VIEWFINDER_CIRCLE = 'viewfinder-circle';
    case WALLET = 'wallet';
    case WINDOW = 'window';

    /**
     * Get a human-readable label for the icon
     */
    public function getLabel(): string
    {
        return match($this) {
            // Academic & Education
            self::ACADEMIC_CAP => 'Academic Cap',
            self::BOOK_OPEN => 'Book Open',
            self::BOOKMARK => 'Bookmark',
            self::BOOKMARK_SLASH => 'Bookmark Slash',
            self::BOOKMARK_SQUARE => 'Bookmark Square',
            self::BUILDING_LIBRARY => 'Building Library',

            // Actions & Navigation
            self::ARROW_DOWN => 'Arrow Down',
            self::ARROW_DOWN_CIRCLE => 'Arrow Down Circle',
            self::ARROW_DOWN_LEFT => 'Arrow Down Left',
            self::ARROW_DOWN_ON_SQUARE => 'Arrow Down On Square',
            self::ARROW_DOWN_ON_SQUARE_STACK => 'Arrow Down On Square Stack',
            self::ARROW_DOWN_RIGHT => 'Arrow Down Right',
            self::ARROW_DOWN_TRAY => 'Arrow Down Tray',
            self::ARROW_LEFT => 'Arrow Left',
            self::ARROW_LEFT_CIRCLE => 'Arrow Left Circle',
            self::ARROW_LEFT_END_ON_RECTANGLE => 'Arrow Left End On Rectangle',
            self::ARROW_LEFT_START_ON_RECTANGLE => 'Arrow Left Start On Rectangle',
            self::ARROW_RIGHT => 'Arrow Right',
            self::ARROW_RIGHT_CIRCLE => 'Arrow Right Circle',
            self::ARROW_RIGHT_END_ON_RECTANGLE => 'Arrow Right End On Rectangle',
            self::ARROW_RIGHT_START_ON_RECTANGLE => 'Arrow Right Start On Rectangle',
            self::ARROW_TOP_RIGHT_ON_SQUARE => 'Arrow Top Right On Square',
            self::ARROW_UP => 'Arrow Up',
            self::ARROW_UP_CIRCLE => 'Arrow Up Circle',
            self::ARROW_UP_LEFT => 'Arrow Up Left',
            self::ARROW_UP_ON_SQUARE => 'Arrow Up On Square',
            self::ARROW_UP_ON_SQUARE_STACK => 'Arrow Up On Square Stack',
            self::ARROW_UP_RIGHT => 'Arrow Up Right',
            self::ARROW_UP_TRAY => 'Arrow Up Tray',
            self::ARROW_UTURN_DOWN => 'Arrow U-turn Down',
            self::ARROW_UTURN_LEFT => 'Arrow U-turn Left',
            self::ARROW_UTURN_RIGHT => 'Arrow U-turn Right',
            self::ARROW_UTURN_UP => 'Arrow U-turn Up',

            // Add more labels as needed...
            default => ucwords(str_replace(['-', '_'], ' ', $this->value)),
        };
    }

    /**
     * Get all icon options for select components
     */
    public static function getOptions(): array
    {
        $options = [];
        foreach (self::cases() as $icon) {
            $options[$icon->value] = $icon->getLabel();
        }
        return $options;
    }

    /**
     * Get icons grouped by category
     */
    public static function getGroupedOptions(): array
    {
        return [
            'Academic & Education' => [
                self::ACADEMIC_CAP->value => self::ACADEMIC_CAP->getLabel(),
                self::BOOK_OPEN->value => self::BOOK_OPEN->getLabel(),
                self::BOOKMARK->value => self::BOOKMARK->getLabel(),
                self::BOOKMARK_SLASH->value => self::BOOKMARK_SLASH->getLabel(),
                self::BOOKMARK_SQUARE->value => self::BOOKMARK_SQUARE->getLabel(),
                self::BUILDING_LIBRARY->value => self::BUILDING_LIBRARY->getLabel(),
            ],
            'Actions & Navigation' => [
                self::ARROW_DOWN->value => self::ARROW_DOWN->getLabel(),
                self::ARROW_LEFT->value => self::ARROW_LEFT->getLabel(),
                self::ARROW_RIGHT->value => self::ARROW_RIGHT->getLabel(),
                self::ARROW_UP->value => self::ARROW_UP->getLabel(),
                self::CHEVRON_DOWN->value => self::CHEVRON_DOWN->getLabel(),
                self::CHEVRON_LEFT->value => self::CHEVRON_LEFT->getLabel(),
                self::CHEVRON_RIGHT->value => self::CHEVRON_RIGHT->getLabel(),
                self::CHEVRON_UP->value => self::CHEVRON_UP->getLabel(),
            ],
            'Business & Office' => [
                self::BRIEFCASE->value => self::BRIEFCASE->getLabel(),
                self::BUILDING_OFFICE->value => self::BUILDING_OFFICE->getLabel(),
                self::BUILDING_OFFICE_2->value => self::BUILDING_OFFICE_2->getLabel(),
                self::BUILDING_STOREFRONT->value => self::BUILDING_STOREFRONT->getLabel(),
                self::CREDIT_CARD->value => self::CREDIT_CARD->getLabel(),
            ],
            'Communication' => [
                self::AT_SYMBOL->value => self::AT_SYMBOL->getLabel(),
                self::CHAT_BUBBLE_BOTTOM_CENTER->value => self::CHAT_BUBBLE_BOTTOM_CENTER->getLabel(),
                self::ENVELOPE->value => self::ENVELOPE->getLabel(),
                self::ENVELOPE_OPEN->value => self::ENVELOPE_OPEN->getLabel(),
                self::MEGAPHONE->value => self::MEGAPHONE->getLabel(),
                self::PHONE->value => self::PHONE->getLabel(),
            ],
            'Computer & Technology' => [
                self::CPU_CHIP->value => self::CPU_CHIP->getLabel(),
                self::COMPUTER_DESKTOP->value => self::COMPUTER_DESKTOP->getLabel(),
                self::DEVICE_PHONE_MOBILE->value => self::DEVICE_PHONE_MOBILE->getLabel(),
                self::DEVICE_TABLET->value => self::DEVICE_TABLET->getLabel(),
                self::SERVER->value => self::SERVER->getLabel(),
                self::SERVER_STACK->value => self::SERVER_STACK->getLabel(),
                self::TV->value => self::TV->getLabel(),
                self::WIFI->value => self::WIFI->getLabel(),
            ],
            'Status & Indicators' => [
                self::BELL->value => self::BELL->getLabel(),
                self::BELL_ALERT->value => self::BELL_ALERT->getLabel(),
                self::BELL_SLASH->value => self::BELL_SLASH->getLabel(),
                self::BELL_SNOOZE->value => self::BELL_SNOOZE->getLabel(),
                self::FIRE->value => self::FIRE->getLabel(),
                self::SPARKLES->value => self::SPARKLES->getLabel(),
            ],
            'People & Users' => [
                self::USER->value => self::USER->getLabel(),
                self::USER_CIRCLE->value => self::USER_CIRCLE->getLabel(),
                self::USER_GROUP->value => self::USER_GROUP->getLabel(),
                self::USER_MINUS->value => self::USER_MINUS->getLabel(),
                self::USER_PLUS->value => self::USER_PLUS->getLabel(),
                self::USERS->value => self::USERS->getLabel(),
            ],
            'Security & Privacy' => [
                self::FINGER_PRINT->value => self::FINGER_PRINT->getLabel(),
                self::LOCK_CLOSED->value => self::LOCK_CLOSED->getLabel(),
                self::LOCK_OPEN->value => self::LOCK_OPEN->getLabel(),
                self::SHIELD_CHECK->value => self::SHIELD_CHECK->getLabel(),
                self::SHIELD_EXCLAMATION->value => self::SHIELD_EXCLAMATION->getLabel(),
            ],
            'Tools & Utilities' => [
                self::CALCULATOR->value => self::CALCULATOR->getLabel(),
                self::CLOCK->value => self::CLOCK->getLabel(),
                self::COMMAND_LINE->value => self::COMMAND_LINE->getLabel(),
                self::MAGNIFYING_GLASS->value => self::MAGNIFYING_GLASS->getLabel(),
                self::PAINT_BRUSH->value => self::PAINT_BRUSH->getLabel(),
                self::PENCIL->value => self::PENCIL->getLabel(),
                self::PENCIL_SQUARE->value => self::PENCIL_SQUARE->getLabel(),
                self::SCISSORS->value => self::SCISSORS->getLabel(),
                self::SWATCH->value => self::SWATCH->getLabel(),
            ],
        ];
    }
}
