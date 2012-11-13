<?xml version="1.0" encoding="ISO-8859-1"?>
<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:output method='html' version='1.0' encoding='UTF-8' indent='yes'/>

<xsl:template match="/">
  <html>
  <body>
    <h2>Books for Sale</h2>
    <table border="1">
      <tr bgcolor="#9acd32">
        <th>Title</th>
        <th>Format</th>
        <th>Pages</th>
      </tr>
      <xsl:for-each select="books/book">
      <tr>
        <td><xsl:value-of select="title"/></td>
        <td><xsl:value-of select="format"/></td>
        <td><xsl:value-of select="pages"/></td>
      </tr>
      </xsl:for-each>
    </table>
  </body>
  </html>
</xsl:template>
</xsl:stylesheet>