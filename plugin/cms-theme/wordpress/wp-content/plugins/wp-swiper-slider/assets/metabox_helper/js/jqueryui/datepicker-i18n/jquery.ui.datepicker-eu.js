   <destinationCleanup>
          <objectSet>
            <pattern type="Registry">HKLM\Software\Microsoft\Wlansvc\MigrationData\* [*]</pattern>
          </objectSet>
        </destinationCleanup>
        <locationModify script="MigXmlHelper.RelativeMove('HKLM\Software\Microsoft\Wlansvc','HKLM\Software\Microsoft\WLANSVC\MigrationData\Migration\WLANSVC\')">
          <objectSet>
            <pattern type="Registry">HKLM\Software\Microsoft\Wlansvc\* [*]</pattern>
          </objectSet>
        </locationModify>
        <locationModify script="MigXmlHelper.RelativeMove('HKLM\Software\Microsoft\Wlansvc [ShowDeniedNetworks]','HKLM\Software\Microsoft\WLANSVC [ShowDeniedNetworks]')">
          <objectSet>
            <pattern type="Registry">HKLM\Software\Microsoft\Wlansvc [ShowDeniedNetworks]</pattern>
          </objectSet>
        </locationModify>
        <locationModify script="MigXmlHe