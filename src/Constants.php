<?php
/**
 * Constants
 *
 * @author Kachit
 */
namespace Kachit\Codegenerator;

class Constants {

    const WORD_CLASS = 'class';
    const WORD_TRAIT = 'trait';
    const WORD_INTERFACE = 'interface';

    const VISIBILITY_PUBLIC = 'public';
    const VISIBILITY_PROTECTED = 'protected';
    const VISIBILITY_PRIVATE = 'private';

    public static function getVisibilities() {
        return [
            self::VISIBILITY_PUBLIC,
            self::VISIBILITY_PROTECTED,
            self::VISIBILITY_PRIVATE,
        ];
    }
}