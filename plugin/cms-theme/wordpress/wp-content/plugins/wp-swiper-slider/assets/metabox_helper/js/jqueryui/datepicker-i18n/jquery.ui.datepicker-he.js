"$(runtime.programData)\Microsoft\Diagnosis\ETLLogs\" owner="true">
      <securityDescriptor name="WRP_PARENT_DIR_DEFAULT_SDDL" />
    </directory>
    <directory destinationPath="$(runtime.system32)\Appraiser\" owner="true">
      <securityDescriptor name="WRP_PARENT_DIR_DEFAULT_SDDL" />
    </directory>
  </directories>
  <registryKeys>
    <registryKey keyName="HKEY_LOCAL_MACHINE\SOFTWARE\Microsoft\Windows\CurrentVersion\Diagnostics\DiagTrack" owner="false">
      <registryValue name="ManifestRefreshInterval" valueType="REG_DWORD" value="0xffffffff" owner="true" />
    </registryKey>
    <registryKey keyName="HKEY_LOCAL_MACHINE\Software\Microsoft\Windows NT\CurrentVersion\AppCompatFlags\ClientTelemetry\TpRequests" owner="false" />
    <registryKey keyName="HKEY_LOCAL_MACHINE\SOFTWARE\Microsoft\Windows NT\CurrentVersion\AppCompatFlags\Appraiser" owner="false" />
    <registryKey keyName="HKEY_LOCAL_MACHINE\SOFTWARE\Microsoft\Windows NT\CurrentVersion\AppCompatFlags\CompatMarkers" owner