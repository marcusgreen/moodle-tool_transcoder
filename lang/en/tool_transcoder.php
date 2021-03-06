<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'tool_transcoder', language 'en'.
 *
 * @package   tool_transcoder
 * @copyright 2020 Michael Vangelovski 
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Transcoder';
$string['pluginname_desc'] = 'This plugin automatically transcodes video and audio files using ffmpeg';
$string['privacy:metadata'] = 'This plugin does not store any personal data.';
$string['crawler'] = 'Find video and audio files and queue for transcoding.';
$string['cleaner'] = 'Clean up transcoder tasks and files.';
$string['checker'] = 'Check task progress and references.';
$string['transcoder'] = 'Transcode a video or audio file.';
$string['settings'] = 'Settings';
$string['disablecron'] = 'Disable cron transcoding.';
$string['disablecron_desc'] = 'Whether to use Moodle\'s core cron system to handle file transcoding. Transcoding can take a long time and has the potential to block other background tasks. Selecting this option will disable transcoding via Moodle\'s cron system. The "crawler" task that queues videos will continue to be run by Moodle\'s cron system. Transcoding can be executed by implement your own scheduled task that executes the `\transcoder\cli\transcode.php` cli script. Run this script every minute to begin encoding videos that are waiting in the queue.';
$string['concurrencylimit'] = 'Transcoding concurrency limit.';
$string['concurrencylimit_desc'] = 'The maximum number of concurrent transcoding tasks allowed. (Required)';
$string['ffmpegbinary'] = 'FFMpeg binary path';
$string['ffmpegbinary_desc'] = 'Path to the ffmpeg binary on the system, e.g. `C:/ffmpeg/bin/ffmpeg.exe` (Required)';
$string['ffprobebinary'] = 'FFProbe binary path';
$string['ffprobebinary_desc'] = 'Path to the ffprobe binary on the system, e.g. `C:/ffmpeg/bin/ffprobe.exe` (Required)';
$string['ffmpegtimeout'] = 'FFMpeg timeout';
$string['ffmpegtimeout_desc'] = 'The timeout for the underlying process. (Required)';
$string['ffmpegthreads'] = 'FFMpeg threads';
$string['ffmpegthreads_desc'] = 'The number of threads that FFMpeg should use. (Required)';
$string['ffmpegaudiocodec'] = 'FFMpeg audio codec';
$string['ffmpegaudiocodec_desc'] = 'Sets the audio codec for video transcoding (Required). For audio transcoding, the default and only available codec is libmp3lame.';
$string['ffmpegadditionalparamsvideo'] = 'FFMpeg video additional parameters';
$string['ffmpegadditionalparamsvideo_desc'] = 'You can specify additional parameters to be added to video encoding tasks. This must be entered in valid json format, e.g. `{"-vf": "scale=-1:720", "-r": "30", "-vprofile": "main", "-level": "3.1", "-b:a": "160k", "-ar": "48000", "-ac": "2", "-movflags": "+faststart"}`';
$string['ffmpegaudiokilobitrate'] = 'FFMpeg audio kilo bitrate';
$string['ffmpegaudiokilobitrate_desc'] = 'The bitrate in kilobytes to be used for audio encoding tasks. (Required)';
$string['ffmpegaudiochannels'] = 'FFMpeg audio channels';
$string['ffmpegaudiochannels_desc'] = 'The number of channels to be used for audio encoding tasks. (Required)';
$string['contentareas'] = 'Search areas';
$string['contentareas_desc'] = 'The activity types and fields to crawl. (Required)';
$string['mimetypes'] = 'MIME types';
$string['mimetypes_desc'] = 'The formats to detect and transcode. (Required)';
$string['processexpiry'] = 'Transcoding time limit';
$string['processexpiry_desc'] = 'The number of minutes to allow an in-progress transcoding task to run before it is retried. Set this value high enough to give files enough time to transcode. This will depend on your length, upload and concurrency limits, as well as how well your server is resourced. At the same time, try to keep this value is low as possible so that multiple failed in-progress tasks do not block new tasks due to the concurrency limit. (Required)';
$string['retries'] = 'Retries';
$string['retries_desc'] = 'The number of times to retry failed transcoding tasks. (Required)';
$string['filesfromtime'] = 'Files From time';
$string['filesfromtime_desc'] = 'Files created after this time (unix timestamp) will be crawled. This setting is automatically updated to the current time each time the crawler task runs so that only new files are crawled.';
$string['refchecktime'] = 'References check time';
$string['refchecktime_desc'] = 'Time in minutes to check that references to transcoded files still exist. There is a scenario in which a user edits content while a file is being transcoded (before a transcoded source has been added to the HTML) and then saves their edits after the transcoding task finishes, overwriting the new HTML that contains the transcoded source with the old HTML that does not contain the source. The `cleaner` task ensures that references to the new source are still present in the HTML for the defined number of minutes from the time that transcoding completed. If content is edited after this time period and the sources are manually removed, they will not be put back in.';
