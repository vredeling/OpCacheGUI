<?php

$texts = [
    'menu.status'                                           => 'Status',
    'menu.config'                                           => 'Configuration',
    'menu.scripts'                                          => 'Cached Scripts',
    'menu.graphs'                                           => 'Graphs',
    'menu.apcustatus'                                       => 'APCu Status',
    'menu.apcuconfig'                                       => 'APCu Settings',
    'menu.apcuvars'                                         => 'APCu Variables',

    'reset.submit'                                          => 'Reset',
    'confirmation.reset'                                    => 'Are you sure you want to reset the cache?',
    'confirmation.yes'                                      => 'Yes',
    'confirmation.no'                                       => 'No',

    'status.title'                                          => 'Status',
    'status.opcache_enabled'                                => 'Enabled',
    'status.cache_full'                                     => 'Cache full',
    'status.restart_pending'                                => 'Restart pending',
    'status.restart_in_progress'                            => 'Restart in progress',

    'memory.title'                                          => 'Memory usage',
    'memory.used_memory'                                    => 'Used memory',
    'memory.free_memory'                                    => 'Free memory',
    'memory.wasted_memory'                                  => 'Wasted memory',
    'memory.current_wasted_percentage'                      => 'Currently wasted',

    'stats.title'                                           => 'Statistics',
    'stats.num_cached_scripts'                              => 'Cached Scripts',
    'stats.num_cached_keys'                                 => 'Cached keys',
    'stats.max_cached_keys'                                 => 'Max cached keys',
    'stats.hits'                                            => 'Hits',
    'stats.start_time'                                      => 'Start time',
    'stats.last_restart_time'                               => 'Last restart',
    'stats.oom_restarts'                                    => 'Oom restart',
    'stats.hash_restarts'                                   => 'Hash restarts',
    'stats.manual_restarts'                                 => 'Manual restarts',
    'stats.misses'                                          => 'Misses',
    'stats.blacklist_misses'                                => 'Blacklist misses',
    'stats.blacklist_miss_ratio'                            => 'Miss ratio',
    'stats.opcache_hit_rate'                                => 'Opcache hit rate',

    'config.title'                                          => 'Configuration',
    'config.opcache.enable'                                 => 'Enabled',
    'config.opcache.enable.description'                     => 'Determines if Zend OPCache is enabled',
    'config.opcache.enable_cli'                             => 'Enabled for CLI',
    'config.opcache.enable_cli.description'                 => 'Determines if Zend OPCache is enabled for the CLI version of PHP',
    'config.opcache.use_cwd'                                => 'Keys based on current working dir',
    'config.opcache.use_cwd.description'                    => 'When this directive is enabled, the OPcache appends the current working directory to the script key, thus eliminating possible collisions between files with the same name (basename). Disabling the directive improves performance, but may break existing applications.',
    'config.opcache.validate_timestamps'                    => 'Validate timestamps',
    'config.opcache.validate_timestamps.description'        => 'When disabled, you must reset the OPcache manually or restart the webserver for changes to the filesystem to take effect.',
    'config.opcache.inherited_hack'                         => 'Inherited hack',
    'config.opcache.inherited_hack.description'             => '',
    'config.opcache.dups_fix'                               => 'Dups fix',
    'config.opcache.dups_fix.description'                   => '',
    'config.opcache.revalidate_path'                        => 'Revalidate path',
    'config.opcache.revalidate_path.description'            => 'Enables or disables file search in include_path optimization',
    'config.opcache.log_verbosity_level'                    => 'Log verbosity level',
    'config.opcache.log_verbosity_level.description'        => 'All OPcache errors go to the Web server log. By default, only fatal errors (level 0) or errors (level 1) are logged. You can also enable warnings (level 2), info messages (level 3) or debug messages (level 4).',
    'config.opcache.memory_consumption'                     => 'Opcache memory size',
    'config.opcache.memory_consumption.description'         => 'The OPcache shared memory storage size.',
    'config.opcache.interned_strings_buffer'                => 'Interned strings buffer',
    'config.opcache.interned_strings_buffer.description'    => 'The amount of memory for interned strings in Mbytes.',
    'config.opcache.max_accelerated_files'                  => 'Maximum cached scripts',
    'config.opcache.max_accelerated_files.description'      => 'The maximum number of keys (scripts) in the OPcache hash table. Only numbers between 200 and 100000 are allowed.',
    'config.opcache.max_wasted_percentage'                  => 'Maximum wasted before restart',
    'config.opcache.max_wasted_percentage.description'      => 'The maximum percentage of "wasted" memory until a restart is scheduled.',
    'config.opcache.consistency_checks'                     => 'Consistency checks frequency',
    'config.opcache.consistency_checks.description'         => 'Check the cache checksum each N requests. The default value of "0" means that the checks are disabled.',
    'config.opcache.force_restart_timeout'                  => 'Force restart timeout',
    'config.opcache.force_restart_timeout.description'      => 'How long to wait (in seconds) for a scheduled restart to begin if the cache is not being accessed.',
    'config.opcache.revalidate_freq'                        => 'Frenquency to check for changes',
    'config.opcache.revalidate_freq.description'            => 'How often (in seconds) to check file timestamps for changes to the shared memory storage allocation. ("1" means validate once per second, but only once per request. "0" means always validate)',
    'config.opcache.preferred_memory_model'                 => '',
    'config.opcache.preferred_memory_model.description'     => 'Preferred Shared Memory back-end. Leave empty and let the system decide.',
    'config.opcache.blacklist_filename'                     => 'Blacklist',
    'config.opcache.blacklist_filename.description'         => 'The location of the OPcache blacklist file (wildcards allowed). Each OPcache blacklist file is a text file that holds the names of files that should not be accelerated. The file format is to add each filename to a new line. The filename may be a full path or just a file prefix (i.e., /var/www/x  blacklists all the files and directories in /var/www that start with \'x\'). Line starting with a ; are ignored (comments).',
    'config.opcache.max_file_size'                          => 'Exclude caching above size',
    'config.opcache.max_file_size.description'              => 'Allows exclusion of large files from being cached. By default all files are cached.',
    'config.opcache.error_log'                              => 'Error log',
    'config.opcache.error_log.description'                  => 'OPcache error_log file name. Empty string assumes "stderr".',
    'config.opcache.protect_memory'                         => 'Protect memory',
    'config.opcache.protect_memory.description'             => 'Protect the shared memory from unexpected writing during script execution. Useful for internal debugging only.',
    'config.opcache.save_comments'                          => 'Save comments',
    'config.opcache.save_comments.description'              => 'If disabled, all PHPDoc comments are dropped from the code to reduce the size of the optimized code.',
    'config.opcache.load_comments'                          => 'Load comments',
    'config.opcache.load_comments.description'              => 'If disabled, PHPDoc comments are not loaded from SHM, so "Doc Comments" may be always stored (save_comments=1), but not loaded by applications that don\'t need them anyway.',
    'config.opcache.fast_shutdown'                          => 'Fast shutdown',
    'config.opcache.fast_shutdown.description'              => 'If enabled, a fast shutdown sequence is used for the accelerated code',
    'config.opcache.enable_file_override'                   => 'File override',
    'config.opcache.enable_file_override.description'       => 'Allow file existence override (file_exists, etc.) performance feature.',
    'config.opcache.optimization_level'                     => 'Optimization level',
    'config.opcache.optimization_level.description'         => 'A bitmask, where each bit enables or disables the appropriate OPcache passes',

    'blacklist.title'                                       => 'Blacklist',
    'blacklist.empty'                                       => 'No scripts are blacklisted',

    'scripts.title'                                         => 'Cached Scripts',
    'scripts.empty'                                         => 'No scripts are cached',
    'scripts.directory.script_count'                        => ' (<i class="count">%s</i> files)',
    'scripts.full_path'                                     => 'Filename',
    'scripts.hits'                                          => 'Hits',
    'scripts.memory_consumption'                            => 'Memory',
    'scripts.last_used_timestamp'                           => 'Last used',
    'scripts.timestamp'                                     => 'Created',
    'scripts.actions'                                       => 'Actions',
    'script.invalidate'                                     => 'Invalidate',

    'graph.title'                                           => 'Graphs',
    'graph.memory.title'                                    => 'Memory',
    'graph.memory.free.%'                                   => '%s free',
    'graph.memory.used.%'                                   => '%s used',
    'graph.memory.wasted.%'                                 => '%s wasted',
    'graph.keys.title'                                      => 'Keys',
    'graph.keys.free.%'                                     => '%s free',
    'graph.keys.scripts.%'                                  => '%s used',
    'graph.keys.wasted.%'                                   => '%s wasted',
    'graph.hits.title'                                      => 'Hits',
    'graph.hits.hits.%'                                     => '%s hits',
    'graph.hits.misses.%'                                   => '%s misses',
    'graph.hits.blacklist.%'                                => '%s blacklist',

    'apcu.status.title'                                     => 'Status',
    'apcu.status.enabled'                                   => 'Enabled',
    'apcu.status.file_upload_support'                       => 'File upload support',
    'apcu.status.version'                                   => 'Version',
    'apcu.status.shared_memory'                             => 'Shared info',
    'apcu.status.start_time'                                => 'Start time',
    'apcu.status.uptime'                                    => 'Uptime',

    'apcu.status.stats'                                     => 'Statistics',
    'apcu.status.cached_vars'                               => 'Cache variables',
    'apcu.status.num_hits'                                  => 'Hits',
    'apcu.status.num_misses'                                => 'Misses',
    'apcu.status.req_rate_user'                             => 'Request rate (hits, misses)',
    'apcu.status.hit_rate_user'                             => 'Hit rate',
    'apcu.status.miss_rate_user'                            => 'Miss rate',
    'apcu.status.insert_rate_user'                          => 'Insert rate',
    'apcu.status.num_expunges'                              => 'Cache full count',

    'apcu.status.memory'                                    => 'Memory usage',
    'apcu.status.total_memory'                              => 'Total memory',
    'apcu.status.used_memory'                               => 'Used memory',
    'apcu.status.free_memory'                               => 'Free memory',
    'apcu.status.fragmentation_percent'                     => 'Fragmentation %',
    'apcu.status.fragmentation_bytes'                       => 'Fragmentation (bytes)',
    'apcu.status.fragmentation_fragments'                   => 'Fragmentation (fragments)',

    'apcu.status' => 'APCu Status',
    'apcu.generalinfo' => 'General APCu Information',
    'apcu.apcversion' => 'APCu Version',
    'apcu.phpversion' => 'PHP Version',
    'apcu.server_name' => 'APCu Host',
    'apcu.server_software' => 'Server Software',
    'apcu.sharedmemory' => 'Shared Memory',
    'apcu.start_time' => 'Start Time',
    'apcu.uptime' => 'Uptime',
    'apcu.file_upload_progress' => 'File Upload Support',

    'apcu.cacheinfo' => 'APCu Cache Information',
    'apcu.cached_vars'=> 'Cached Variables',
    'apcu.num_hits'=> 'Hits',
    'apcu.num_misses'=> 'Misses',
    'apcu.req_rate_user'=> 'Request Rate (hits, misses)',
    'apcu.hit_rate_user'=> 'Hit Rate',
    'apcu.miss_rate_user'=> 'Miss Rate',
    'apcu.insert_rate_user'=> 'Insert Rate',
    'apcu.num_expunges'=> 'Cache full count',

    'apcu.config.title'                                     => 'APCu configuration',
    'config.apc.enabled'                                    => 'Enabled',
    'config.apc.enabled.description'                        => 'Determines if APCu is enabled',
    'config.apc.enable_cli'                                 => 'Enabled for CLI',
    'config.apc.enable_cli.description'                     => 'Determines if APCu is enabled for the CLI version of PHP',
    'config.apc.writable'                                   => 'Writable',
    'config.apc.writable.description'                       => '',
    'config.apc.preload_path'                               => 'Preload path',
    'config.apc.preload_path.description'                   => 'Optional path that APC will use to load cached data at startup.',
    'config.apc.serializer'                                 => 'Serializer',
    'config.apc.serializer.description'                     => 'Defines which serializer should be used. Default is the standard PHP serializer.',
    'config.apc.entries_hint'                               => 'Number of entries (hint)',
    'config.apc.entries_hint.description'                   => 'Hint for the number of distinct user variables to store. Set to zero or omit if not sure.',
    'config.apc.ttl'                                        => 'TTL of entries',
    'config.apc.ttl.description'                            => 'The number of seconds a cache entry is allowed to idle in a slot in case this cache entry slot is needed by another entry.',
    'config.apc.use_request_time'                           => 'Use SAPI request time',
    'config.apc.use_request_time.description'               => 'Use the SAPI request start time for TTL.',
    'config.apc.gc_ttl'                                     => 'Garbage collection TTL',
    'config.apc.gc_ttl.description'                         => 'Number of seconds that a cache entry may remain on the garbage-collection list.  This value provides a fail-safe in the event that a server process dies while executing a cached source file; if that source file is modified, the memory allocated for the old version will not be reclaimed until this TTL reached.',
    'config.apc.smart'                                      => 'Smart expunge',
    'config.apc.smart.description'                          => 'Allows you to set a runtime configuration value which is used to determine if an expunge should be run if (available_size < apc.smart * requested_size)',
    'config.apc.slam_defense'                               => 'Slam defense',
    'config.apc.slam_defense.description'                   => 'Prevents slamming of a key. The higher the setting the greater the defense against cache slams. Setting this to 0 disables this feature.',
    'config.apc.shm_segments'                               => 'Shared memory segments',
    'config.apc.shm_segments.description'                   => 'The number of shared memory segments to allocate for the compiler cache.',
    'config.apc.shm_size'                                   => 'Shared memory size',
    'config.apc.shm_size.description'                       => 'The size of each shared memory segment.',
    'config.apc.coredump_unmap'                             => 'Enabled handling of signals (SIGSEGV etc)',
    'config.apc.coredump_unmap.description'                 => 'When these signals are received, APC will attempt to unmap the shared memory segment in order to exclude it from the core file. This setting may improve system stability when fatal signals are received and a large APC shared memory segment is configured.',
    'config.apc.mmap_file_mask'                             => 'MMAP file mask',
    'config.apc.mmap_file_mask.description'                 => 'If compiled with MMAP support by using --enable-mmap this is the mktemp-style file_mask to pass to the mmap module for determining whether your mmap ed memory region is going to be file-backed or shared memory backed.',
    'config.apc.rfc1867'                                    => 'File upload progress enabled',
    'config.apc.rfc1867.description'                        => 'Determines if APCu file upload progress is enabled',
    'config.apc.rfc1867_prefix'                             => 'File upload progress prefix',
    'config.apc.rfc1867_prefix.description'                 => 'Key prefix to use for the user cache entry generated by rfc1867 upload progress functionality.',
    'config.apc.rfc1867_name'                               => 'File upload progress name',
    'config.apc.rfc1867_name.description'                   => 'Specify the hidden form entry name that activates APC upload progress and specifies the user cache key suffix.',
    'config.apc.rfc1867_freq'                               => 'File upload progress frequency',
    'config.apc.rfc1867_freq.description'                   => 'The frequency that updates should be made to the user cache entry for upload progress. This can take the form of a percentage of the total file size or a size in bytes optionally suffixed with "k", "m", or "g". 0 updates as often as possible, which may cause slower uploads.',
    'config.apc.rfc1867_ttl'                                => 'File upload progress TTL',
    'config.apc.rfc1867_ttl.description'                    => 'TTL for rfc1867 entries.',

    'apcu.hoststatusdiagrams'=>'APCu Host Status Diagrams',
    'apcu.detailedmemoryusage'=>'APCu Detailed Memory Usage and Fragmentation',
];
